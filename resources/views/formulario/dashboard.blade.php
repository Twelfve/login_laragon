@extends('layouts.master')
@section('title', $title)
@section('header')

@stop
@section('navbar')
    <ul>
        <li><a href="{{route('Davinci')}}">Leonardo Da Vinci</a></li>
        <li><a href="{{route('Frida')}}">Frida Kahlo</a></li>
        <li><a href="{{route('Miguel')}}">Michelangelo Buonarroti</a></li>
        <li><a href="{{route('Pablo')}}">Pablo Picasso</a></li>
        <li><a href="{{route('Vincent')}}">Vincent Van Gogh</a></li>
    </ul>
@stop
@section('content')
    <h1>Logueo Exitoso</h1>
@stop
@section('footer')

@stop
