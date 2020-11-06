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
    <h1>El apotema del cuadrado es: {{$apotema}}</h1>
@stop
@section('footer')

@stop



