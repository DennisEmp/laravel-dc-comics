@extends('layouts.main-layout')

@section('content')
    
    <h1>People</h1>
    <ul>
        @foreach ($people as $person)

        <li>{{ $person -> firstName }} {{ $person -> lastName }} - {{ $person -> dateOfBirth }} - {{ $person -> height }} cm</li>
            
        @endforeach
    </ul>

@endsection