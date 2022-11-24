<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\RecipeController;


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

Route::get('/', [RecipeController::class, 'getRandom'] );

Route::get('recipes', [RecipeController::class, 'indexMeals'] );

//Route::get('ingredients', [RecipeController::class, 'mealsByIngredient']);

Route::get('recipes/{recipe:slug}', [RecipeController::class, 'showMeals']);

Route::get('drinks', [RecipeController::class, 'indexDrinks']);

Route::get('drinks/no-alcohol', [RecipeController::class, 'nonAlcoholic']);

Route::get('drinks/with-alcohol', [RecipeController::class, 'alcoholic']);

Route::get('drinks/{drink:slug}', [RecipeController::class, 'showDrink']);

Route::get('drinks/search', [RecipeController::class, 'searchDrinkByName']);

