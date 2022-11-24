<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingredient;

class IngredientController extends Controller
{
    public function mealsByIngredient()
    {
        $ingredient = Ingredient::latest();
        $test = $ingredient->where('name', $_GET['searchIngredient']);
        return view('recipes', [
            'recipes' => $ingredient->recipes
    ]);
    }
}
