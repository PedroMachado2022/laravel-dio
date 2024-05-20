<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\BandController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('hello-post/{name}', [HelloWorldController::class, 'hello']);


Route::get('bands/{id}', [BandController::class, 'getById']);
Route::get('bands/gender/{gender}', [BandController::class, 'getByGender']);
Route::post('bands/store', [BandController::class, 'store']);
