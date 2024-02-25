@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
<h1>Progetti</h1>
<br>
<ul>
    @foreach ($projects as $project)
        <li>
            <h2> Nome: <br>
                {{ $project -> nome }}</h2>
                <br>
            <h5> Descrizione: <br>
                 {{ $project -> descrizione }}</h5> <br>
        </li>

            <h5>Tecnology :</h5>
            @foreach ($project -> technologies as $technology)
                 <em>{{ $technology -> nome}} </em>
                <br>
            @endforeach
            <br>
            <br>
            <br>
    @endforeach
</ul>
@endsection
