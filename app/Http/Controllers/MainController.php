<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class MainController extends Controller
{
    
    public function home() {

        $people = Person :: all();

        return view('pages.home', compact('people'));
    }

    public function personDelete(Person $person) {

        $person -> delete();
    
        return redirect() -> route('pages.home');
    }
}
