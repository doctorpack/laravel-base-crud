@extends('layouts.app')

@section('main_content')
    <h1>Modifica Fumetto</h1>
    <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="post">
        @csrf
        @method('PUT')

        <div>
            <label for="thumb">Thumb</label>
            <input type="text" id="thumb" name="thumb" value="{{ $comic->thumb }}">
        </div>
        <br>
        <div>
            <label for="title">Title</label>
            <input type="text" id="title" name="title" value="{{ $comic->title }}">
        </div>
        <br>
        <div>
            <label for="description">Description</label>
            <input type="text" id="description" name="description" value="{{ $comic->description }}">
        </div>
        <br>
        <div>
            <label for="price">Price</label>
            <input type="text" id="price" name="price" value="{{ $comic->price }}">
        </div>
        <br>
        <div>
            <label for="sale_date">Sale Date</label>
            <input type="text" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
        </div>
        <br>
        <div>
            <label for="type">Type</label>
            <input type="text" id="type" name="type" value="{{ $comic->type }}">
        </div>
        <br>
        <input type="submit" value="Invia">
    </form>
@endsection