@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Type of Project</h1>
    <ul>
        @foreach ($types as $type)
            <li>
                <h2>Categoria progetto</h2>
                <h2>{{ $type -> name }}</h2>
                <h5>{{ $type -> description }}</h5>
                <br>
                <h3>Contenitore progetti</h3> 
                <ul>
                    @foreach ($type -> projects as $project)
                        <li>
                             nome progetto : <br><b>{{ $project -> nome }}</b>
                            <br>
                           
                            <span> descrizione: <br> {{ $project -> descrizione }}</span>
                            <br>
                            <br>
                        </li>

                    @endforeach
                </ul>
            </li>
            <br><br><br>
        @endforeach
    </ul>
@endsection
