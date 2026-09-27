@extends('layout.layout')
@section('tytul', ' - Strona o nas')
@section('podtytul', 'O nas')
@section('tresc')
    <div>Strona o nas - i jej treści</div>
    @isset($zadania)
    <ol>
        @foreach ($zadania as $zadanie)
            <li>{{$zadanie}}</li>
        @endforeach
    </ol>        
    @endisset
@endsection