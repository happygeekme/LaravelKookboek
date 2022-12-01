<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Service\CocktailApi;
use App\Models\Ingredient;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;


class RecipeController extends Controller
{
    public function __construct(
        protected CocktailApi $drinks
    )
    {
    }

    public function getRandom()
    {
        return view('home.home', [
            'recipe' => Recipe::inRandomOrder()
                ->where('validated', true)
                ->first(),
            'drink' => $this->drinks->getRandom()[0]
        ]);
    }

    public function indexMeals()
    {
        return view('recipes.recipes', [
            'recipes' => Recipe::latest()
                ->where('validated', true)
                ->filter(request(['searchRecipe']))->get(),
        ]);
    }



    public function showMeal(Recipe $recipe)
    {
        return view('recipes.recipe', [
            'recipe' => $recipe
        ]);
    }


    public function sendRecipeForm()
    {
        return view('recipes.create', [
            'ingredients' => Ingredient::all()
        ]);
    }

    protected function store()
    {
        $recipe = Recipe::create([
            'user_id' => Auth::user()->id,
            'title' => request('title'),
            'slug' =>   strtolower(str_replace(' ', '-', request('title'))),
            'instructions' => request('instructions'),
            'number_of_servings' => request('number_of_servings'),
            'note' => request('note'),
            'image' => request()->file('image')->store('public/recipePics'),
            'validated' => false,
            ]);

        for($i = 1; $i < 10; $i ++) {
            if(request('ingredient' . str($i)) != null && request('ingredient' . str($i)) != 'Selecteer Ingredient') {

                $recipe->ingredients()->attach($recipe->id, [
                   'ingredient_id' =>  request('ingredient' . str($i)),
                    'measurement' => request('measurementIngredient' . str($i)),
                    'amount' => request('amountIngredient' . str($i))
                ]);
            }
        }

        for($i = 11; $i < 15; $i ++) {
            if(request('ingredient' . str($i)) != null){

                $ingredient = Ingredient::create([
                    'name' => request('ingredient' . str($i))
                ]);

                $recipe->ingredients()->attach($recipe->id, [
                    'ingredient_id' =>  $ingredient->id,
                    'measurement' => request('measurementIngredient' . str($i)),
                    'amount' => request('amountIngredient' . str($i))
                ]);
            }
        }

        session()->flash('success', 'Bedankt! Je recept is ingestuurd');
        return redirect('/');
    }

    public function indexDrinks()
    {
        $alcoholic = $this->drinks->alcoholicOrNonAlcoholic('Alcoholic');
        $nonAlcoholic = $this->drinks->alcoholicOrNonAlcoholic('Non_Alcoholic');
        $allDrinks = array_merge($alcoholic, $nonAlcoholic);

        return view('drinks.drinks', [
            'drinks' => Arr::random($allDrinks, 21),
        ]);
    }

    public function nonAlcoholic()
    {
        return view('drinks.drinks', [
            'drinks' => $this->drinks->alcoholicOrNonAlcoholic('Non_Alcoholic')
        ]);
    }

    public function alcoholic()
    {
        return view('drinks.drinks', [
            'drinks' => $this->drinks->alcoholicOrNonAlcoholic('Alcoholic')
        ]);
    }

    public function showDrink($slug)
    {
        $name = str_replace('-', ' ', $slug);
        return view('drinks.drink', [
            'drink' => $this->drinks->getByName($name)
        ]);
    }

    public function searchDrinkByName()
    {
        return view('drinks.drinks', [
            'drinks' => $this->drinks->getByName(request(['searchDrink']))
        ]);
    }

}
