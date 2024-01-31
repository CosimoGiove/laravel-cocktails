<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\PageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [PageController::class, 'index']);