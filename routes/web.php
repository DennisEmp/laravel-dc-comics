<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

Route::get('/', [MainController :: class, 'home']);

// ROTTA DELETE 

Route :: get('/person/delete/{person}', [MainController :: class, 'personDelete'])
    -> name('person.delete');