@extends('layouts.main-layout')

@section('content')
    
    <h1>People</h1>
    <ul>
        @foreach ($people as $person)

        <li>
            <a href="{{ route('person.show', $person) }}">
                {{ $person -> firstName }} {{ $person -> lastName }} - {{ $person -> dateOfBirth }} - {{ $person -> height }} cm
            </a>
            -
            <a href="{{ route('person.delete', $person) }}">X</a>
        </li>
            
        @endforeach
    </ul>

@endsection