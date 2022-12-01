<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Validation\Rule;

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
        return view('admin.recipes.edit', ['recipe' => $recipe]);
    }

    public function update(Recipe $recipe)
    {
        $attributes =  request()->validate([
            'title' => 'required',
            'slug' =>   ['required', Rule::unique('recipes', 'slug')->ignore($recipe->id)],
            'instructions' => 'required',
            'number_of_servings' => 'number',
            'note' => 'string',
            'image' => 'image',
            'validated' => true,
        ]);

        if(isset($attributes['image'])) {
            $attributes['image'] = request()->file('image')->store('recipePics');
        }

        $recipe->update($attributes);

        return back()->with('succes', 'Recept geupdate!');
    }

}
