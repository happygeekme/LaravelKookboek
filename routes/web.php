<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\RecipeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\FormController;


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
Route::get('recipes/{recipe:slug}', [RecipeController::class, 'showMeal']);

Route::get('ingredients', [\App\Http\Controllers\IngredientController::class, 'mealsByIngredient']);

Route::get('drinks', [RecipeController::class, 'indexDrinks']);
Route::get('drinks/no-alcohol', [RecipeController::class, 'nonAlcoholic']);
Route::get('drinks/with-alcohol', [RecipeController::class, 'alcoholic']);
Route::get('drinks/{drink:slug}', [RecipeController::class, 'showDrink']);
Route::get('drinks/search', [RecipeController::class, 'searchDrinkByName']);

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

Route::get('/send-recipe', [RecipeController::class, 'create'])->middleware('auth');
