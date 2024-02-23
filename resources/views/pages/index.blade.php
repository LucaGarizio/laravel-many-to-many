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
                <h2>{{ $type -> titolo }}</h2>
                <h5>{{ $type -> data }}</h5>
                
                <h3>Contenitore progetti</h3>
                <ul>
                    @foreach ($type -> projects as $project)
                        <li>
                            <b>{{ $project -> nome }}</b>
                            <br>
                            <span>{{ $project -> descrizione }}</span>
                        </li>
                    @endforeach
                </ul>
            </li>
            <br><br><br>
        @endforeach
    </ul>
@endsection
