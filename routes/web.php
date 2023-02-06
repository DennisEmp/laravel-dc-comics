<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

Route::get('/', [MainController :: class, 'home']);

Route::get('/', function () {
    return view('welcome');
});
