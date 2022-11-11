<?php

use Illuminate\Support\Facades\Route;
use \App\Models\Recipe;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('recipes', [
        'recipes' => Recipe::all()
    ]);
});

Route::get('recipes/{recipe:title}', function (Recipe $recipe) {
    return view('recipe', [
        'recipe' => $recipe,
        'ingredients' => $recipe->ingredients
    ]);
});
