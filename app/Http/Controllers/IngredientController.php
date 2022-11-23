<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingredient;

class IngredientController extends Controller
{
    public function mealsByIngredient()
    {
        $ingredient = Ingredient::latest()->filter(request(['searchIngredient']));
        return view('recipes', [
            'recipes' => $ingredient->recipes
    ]);
    }
}
