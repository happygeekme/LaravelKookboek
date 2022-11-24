<?php

namespace App\Http\Controllers;
use App\Models\Recipe;
use App\Service\CocktailApi;
use App\Models\Ingredient;
use Illuminate\Support\Arr;


class RecipeController extends Controller
{

    public function __construct(
        protected CocktailApi $drinks
    )
    {
    }

    public function getRandom()
    {
//        @dd(Recipe::inRandomOrder());
        return view('home.home', [
            'recipe' => Recipe::inRandomOrder()->first(),
            'drink' => $this->drinks->getRandom()[0]
        ]);
    }

    public function indexMeals()
    {
        return view('recipes.recipes', [
           'recipes' => Recipe::latest()->filter(request(['searchRecipe']))->get(),
        ]);
    }

    public function showMeal(Recipe $recipe)
    {
        return view('recipes.recipe', [
            'recipe' => $recipe
        ]);
    }

    protected function create()
    {
        return view('recipes.create');
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
//        @dd($this->drinks->getByName(request(['searchDrink'])));
        return view('drinks.drinks', [
            'drinks' => $this->drinks->getByName(request(['searchDrink']))
        ]);
    }

}
