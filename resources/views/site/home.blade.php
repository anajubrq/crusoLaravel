@extends('site.layout')


@section('title', 'Essa é a página HOME')

@section('content')
    <h1>Essa é a minha home</h1>
    <p>Nome: {{ $nome }}</p>
    <p>Idade: {{ $idade }}</p>
@endsection
