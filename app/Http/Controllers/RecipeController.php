<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Service\CocktailApi;


class RecipeController extends Controller
{

    public function __construct(
        protected CocktailApi $cocktails
    )
    {
    }

    public function index()
    {
        return view('recipes', [
           'recipes' => Recipe::latest()->filter(request(['search']))->get(),
            'cocktail' => $this->cocktails->getRandom()['drinks'][0]
        ]);
    }

    public function show(Recipe $recipe)
    {
        return view('recipe', [
            'recipe' => $recipe
        ]);
    }

    protected function getRecipes()
    {
        return Recipe::latest()->filter()->get();
    }
}
