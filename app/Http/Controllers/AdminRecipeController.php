<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use App\Models\Recipe;
use Illuminate\Support\Facades\Storage;


class AdminRecipeController extends Controller
{

    public function unvalidated()
    {
        return view('admin.dashboard', [
            'recipes' => Recipe::all()
                ->where('validated', false)
        ]);
    }

    public function edit(Recipe $recipe)
    {
        return view('admin.recipes.edit', [
            'recipe' => $recipe,
            'ingredients' => $recipe->ingredients,
            'allIngredients' => Ingredient::all()
        ]);
    }

    public function update(Recipe $recipe)
    {
        $recipe->update([
            'title' => request('title'),
            'slug' =>   strtolower(str_replace(' ', '-', request('title'))),
            'instructions' => request('instructions'),
            'number_of_servings' => request('number_of_servings'),
            'note' => request('note'),
            'validated' => false,
        ]);

        return redirect('admin/dashboard')->with('success', 'Recept geupdate!');
    }

    public function approve(Recipe $recipe)
    {
        $recipe->validated = true;
        $recipe->save();

        return redirect('admin/dashboard')->with('success', 'Recept goedgekeurd!');
    }

}
