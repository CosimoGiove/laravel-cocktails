<?php

use App\Http\Controllers\Admin\CocktailsController;
use App\Http\Controllers\Admin\IngredientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\PageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [PageController::class, 'index'])->name("coktails");

Route::resource('/cocktail', CocktailsController::class);
Route::resource('/ingredient', IngredientController::class);