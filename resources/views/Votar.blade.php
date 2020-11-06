@extends('layouts.master')
@section('title', $title)
@section('header')

@stop
@section('navbar')
    <ul>
        <li>Link1</li>
        <li>Link2</li>
        <li>Link3</li>
    </ul>
@stop
@section('content')
    @if ($edad >= 18)
        <p>Puedes Votar</p>
    @else
        <p>No Puedes Votar</p>
    @endif
@stop
@section('footer')

@stop


