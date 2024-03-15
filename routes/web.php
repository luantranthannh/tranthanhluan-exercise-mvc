<?php

use Illuminate\Support\Facades\Route;
use App\Models\Fruit;
use App\Http\Controllers\FruitController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/myview/{user}', function ($user) {
    return view('home', ['username' => $user]);
});

Route::get('/fruits', function () {
    return Fruit::all();
});

Route::get('/showFruits', [FruitController::class, 'getFruits']);