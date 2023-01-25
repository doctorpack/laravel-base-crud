@extends('layouts.app')

@section('main_content')
    <h1>Crea Nuovo Fumetto</h1>
    <form action="{{ route('comics.store') }}" method="post">
        @csrf

        <div>
            <label for="thumb">Thumb</label>
            <input type="text" id="thumb" name="thumb">
        </div>
        <br>
        <div>
            <label for="title">Title</label>
            <input type="text" id="title" name="title">
        </div>
        <br>
        <div>
            <label for="description">Description</label>
            <input type="text" id="description" name="description">
        </div>
        <br>
        <div>
            <label for="price">Price</label>
            <input type="text" id="price" name="price">
        </div>
        <br>
        <div>
            <label for="sale_date">Sale Date</label>
            <input type="text" id="sale_date" name="sale_date">
        </div>
        <br>
        <div>
            <label for="type">Type</label>
            <input type="text" id="type" name="type">
        </div>
        <br>
        <input type="submit" value="Invia">
    </form>
@endsection