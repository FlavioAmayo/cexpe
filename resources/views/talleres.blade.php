@extends('layout')

@section('title', 'Talleres')

@section('content')
    <h1>Página de Talleres</h1>
    <ul>
        <li><a href="{{ route('danza') }}">Danza</a></li>
        <li><a href="{{ route('baile') }}">Baile</a></li>
        <li><a href="{{ route('oratoria') }}">Oratoria</a></li>
        <li><a href="{{ route('liderazgo') }}">Liderazgo</a></li>
    </ul>
@endsection
