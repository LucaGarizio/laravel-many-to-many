@extends('layouts.main-layout')
@section('head')
    <title>Progetto</title>
@endsection
@section('content')
<h1>Modifica progetto</h1>
<form method="POST" enctype="multipart/form-data">
    @csrf
    @method("PUT")
    <label for="name">Nome</label>
    <input type="text" name="name" id="name" value="{{$project -> name}}">
    <br>
    <label for="description">Descrizione</label>
    <input type="text" name="description" id="description" value="{{ $project -> description}}">
    <br>
    <label for=""></label>
    <select name="type_id" id="type_id">
        @foreach ($types as $type)
        <option value="{{$type -> id}}" 
            
            @selected($project -> type -> id === $type -> id)
            >
            {{$type -> name}}
        </option>
            
        @endforeach
    </select>
    <br>
    @foreach ($technologies as $technology)
        <div class="div">
            <input type="checkbox" 
            name="technology_id[]" 
            id="{{"technology-" . $technology -> id}}"
            value="{{$technology -> id}}">

            @foreach ($project -> technologies as $pTech)
                @checked($pTech -> id === $technology -> id)
            @endforeach
            <label for="{{"technology-" . $technology -> id}}">
                {{$technology -> name}}
            </label>
        </div>
    @endforeach
    <br>
    @if ($project -> image )
        <img src="{{asset('/storage/' . $project -> image)}}" 
        width="100px" height="100px" 
        style="border-radius: 50%">
    @endif
    <br>
    <br>
        <label for="image">Cambia Immagine</label>
        <input type="file" name="image" id="image"
        accept="image/*"> 
        <br>   
        <br>
        <input type="submit" value="Modifica">
</form>
@endsection
