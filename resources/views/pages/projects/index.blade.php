@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
<h1>Project</h1>
<br>
<ul>
    @foreach ($projects as $project)
        <li>
            <h2>progetti</h2>
            <h2>{{ $project -> nome }}</h2>
            <h5>{{ $project -> descrizione }}</h5>
            
            <br>
    @endforeach
</ul>
@endsection
