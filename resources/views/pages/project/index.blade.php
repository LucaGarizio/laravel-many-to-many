@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
<h1>Progetti</h1>
<a href="{{route('project.create')}}">Crea Progetto</a>
<br>
<ul>
    @foreach ($projects as $project)
        <li> 
            <h4> Nome Progetto:</h4>
                <h3>{{ $project -> name }}</h3>
                <br>
            <h5> Descrizione: </h5>
                 {{ $project -> description }}
                <br>
                <br>
        </li>

            <h5>Technology :</h5>
            @foreach ($project -> technologies as $technology)
                <em>{{ $technology -> name}} </em>
                <br>
            @endforeach
            <br>
            <br>
    @endforeach
</ul>
@endsection
