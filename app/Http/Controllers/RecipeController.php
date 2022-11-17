<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class RecipeController extends Controller
{
    public function index()
    {
        return view('recipes', [
           'recipes' => Recipe::latest()->filter(request(['search']))->get(),
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
