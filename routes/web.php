<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

Route::get('/', [MainController :: class, 'home'])
    -> name('home');;

// ROTTA SHOW 

Route :: get('/person/show/{person}', [MainController :: class, 'personShow'])
    -> name('person.show');


// ROTTA DELETE 

Route :: get('/person/delete/{person}', [MainController :: class, 'personDelete'])
    -> name('person.delete');