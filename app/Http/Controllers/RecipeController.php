<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Service\CocktailApi;


class RecipeController extends Controller
{

    public function __construct(
        protected CocktailApi $drinks
    )
    {
    }

    public function getRandom()
    {
        return view('home', [
            'recipe' => Recipe::inRandomOrder()->first(),
            'drink' => $this->drinks->getRandom()['drinks'][0]
        ]);
    }

    public function indexMeals()
    {
        return view('recipes', [
           'recipes' => Recipe::latest()->filter(request(['search']))->get(),
        ]);
    }

    public function addSlugArray($array)
    {
        for($i=0; $i < count($array); $i++ ) {
            $tolower = strtolower([$i]['strDrink']);
            $slug = str_replace(' ', '-', $tolower);
            $array[$i]['slug'] = $slug;
        }
    }

    public function indexDrinks()
    {
        $alcoholic = $this->drinks->alcoholicOrNonAlcoholic('Alcoholic');
        $nonAlcoholic = $this->drinks->alcoholicOrNonAlcoholic('Non_Alcoholic');

        $allDrinks = array_merge($alcoholic['drinks'], $nonAlcoholic['drinks']);

        return view('drinks', [
            'drinks' => $allDrinks,
            'alcoholicDrinks' => $alcoholic,
            'nonAlcoholicDrinks' => $nonAlcoholic
        ]);
        }

    public function show(Recipe $recipe)
    {
        return view('recipe', [
            'recipe' => $recipe
        ]);
    }

    public function showDrink($id)
    {
        return view('drink', [
            'drink' => $this->drinks->getById($id)['drinks'][0]
        ]);
    }

    protected function getRecipes()
    {
        return Recipe::latest()->filter()->get();
    }

}
