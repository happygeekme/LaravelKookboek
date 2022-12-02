<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\RecipeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\MailinglistController;
use App\Http\Resources\RecipeResource;
use App\Models\Recipe;
use App\Http\Controllers\AdminRecipeController;

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

Route::get('ingredients', [IngredientController::class, 'mealsByIngredient']);

Route::get('drinks', [RecipeController::class, 'indexDrinks']);
Route::get('drinks/no-alcohol', [RecipeController::class, 'nonAlcoholic']);
Route::get('drinks/with-alcohol', [RecipeController::class, 'alcoholic']);
Route::get('drinks/{drink:slug}', [RecipeController::class, 'showDrink']);

Route::post('newsletter', [MailinglistController::class, 'subscribe']);

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

Route::get('send-recipe-form', [RecipeController::class, 'sendRecipeForm'])->middleware('auth');
Route::post('send-recipe', [RecipeController::class, 'store'])->middleware('auth');

Route::get('admin/dashboard', [AdminRecipeController::class, 'unvalidated'])->middleware('admin');
Route::get('/admin/recipes/{recipe}/edit', [AdminRecipeController::class, 'edit'])->middleware('admin');
Route::patch('/admin/recipes/{recipe}', [AdminRecipeController::class, 'update'])->middleware('admin');
Route::patch('/admin/recipes/approve/{recipe}', [AdminRecipeController::class, 'approve'])->middleware('admin');

// API ENDPOINT ROUTES
Route::get('api/recipe/{id}', function ($id) {
    return (new RecipeResource(Recipe::findOrFail($id)))
        ->response()
        ->header('X-Value', 'True');
});

Route::get('api/recipes', function () {
    return RecipeResource::collection(Recipe::all());
});

