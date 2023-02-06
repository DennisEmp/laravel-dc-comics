@extends('layouts.main-layout')

@section('content')
    
    <h1>Person: {{ $person -> firstName }} {{ $person -> lastName }} </h1>
    <h2>Data di Nascita: {{ $person -> dateOfBirth }} </h2>
    <h2>Altezza: {{ $person -> height }} </h2>

@endsection