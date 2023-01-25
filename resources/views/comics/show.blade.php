@extends('layouts.app')

@section('main_content')
    <h1>Nome:{{ $comics->title }}</h1>
    <div><img src="{{ $comics->thumb }}" alt="comic image"></div>
    <div>Descrizione:{{ $comics->description }}</div>
    <div>Prezzo:{{ $comics->price }}</div>
    <div>Data: {{ $comics->sale_date }}</div>
    <div>Tipo:{{ $comics->type }}</div>
    <a href="/comics">Ritorna alla pagina Precendete</a>
@endsection