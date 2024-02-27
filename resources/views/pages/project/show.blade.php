@extends('layouts.main-layout')

@section('head')
    <title></title>
@endsection

@section('content')
    <h1>Visualizza progetto</h1>

    <h1>
        {{ $projects->technology->nome }}
        -
        {{ $projects->nome }}
    </h1>

    <h3>Genres</h3>
    <ul>
        @foreach ($projects->technologies as $technology)
            <li>
                {{ $technology->nome }}
            </li>
        @endforeach
    </ul>
@endsection
