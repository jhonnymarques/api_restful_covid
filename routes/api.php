<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\CitieController;
use App\Http\Controllers\API\NeighborhoodController;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/cities', [CitieController::class, 'index']);
Route::get('/bairros', [NeighborhoodController::class, 'index']);
