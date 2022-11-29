<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipeFormController extends Controller
{
    public $ingredientsSelected = [];

    public function add(Request $request)
    {
//        @dd($request);
        $ingredient = $request->validate([
            'name' => ['required', 'text'],
            'amount' => ['float'],
            'measurement' => ['text'],
            'id' => ['integer']
        ]);

        array_push($this->ingredientsSelected, $ingredient);

        return redirect()->route('send-recipe')->with(['ingredientsSelected' => $this->ingredientsSelected]);
    }
}
