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

    // function show
    public function personShow(Person $person) {

        return view('pages.personShow', compact('person'));
    }

    // function delete

    public function personDelete(Person $person) {

        $person -> delete();
    
        return redirect() -> route('home');
    }
}
