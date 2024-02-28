@extends('layouts.main-layout')
@section('head')
    <title>Nuovo Progetto</title>
@endsection
@section('content')
<h1>Nuovo progetto</h1>
<form method="POST" enctype="multipart/form-data">
    @csrf
    @method("POST")
    <label for="name">Nome</label>
    <input type="text" name="name" id="name">
    <br>
    <label for="description">Descrizione</label>
    <input type="text"  name="description" id="description">
    <br>
    <label for=""></label>
    <select name="type_id" id="type_id">
        @foreach ($types as $type)
        <option value="{{$type -> id}}">{{$type -> name}}</option>
            
        @endforeach
    </select>
    <br>
    @foreach ($technologies as $technology)
        <div class="div">
            <input type="checkbox" 
            name="technology_id[]" 
            id="{{"technology-" . $technology -> id}}"
            value="{{$technology -> id}}">

            <label for="{{"technology-" . $technology -> id}}">
                {{$technology -> name}}
            </label>
           
        </div>
    @endforeach
    <label for="image">Carica Immagine</label>
    <input type="file" name="image" id="image"> <br>    
    <input type="submit" value="Crea">
</form>
@endsection
