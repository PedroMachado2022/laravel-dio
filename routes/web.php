<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorldController;



Route::get('hello/{name}', function ($name) {
    return 'hello ' . $name;
});
