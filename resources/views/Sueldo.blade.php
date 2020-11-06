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
    @if($hrstr <= 40)
        <p>Tu sueldo es: {{$sueldo}}</p>
    @elseif($hrstr >= 41)
        <p>Tu sueldo es: {{$sueldoextra}}</p>
    @endif
@stop
@section('footer')

@stop


