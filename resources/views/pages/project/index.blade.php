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
                <h3>{{ $project -> type -> name}}</h3>
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
            @if ($project -> image )
            <img src="{{asset('/storage/' . $project -> image)}}" width="200px" height="200px" style="border-radius: 50%">
            @endif
           
            <br>
            <a href="{{route('project.edit', $project -> id) }}">Modifica</a>
            <br>
            <br>
            <br>
    @endforeach
</ul>
@endsection
