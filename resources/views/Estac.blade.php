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
    @if($hrs<=2)
        <p>Pagas: {{$hrs*5}}</p>
    @elseif($hrs<=5)
        <p>Pagas: {{$menorcinc}}</p>
    @elseif($hrs<=10)
        <p>Pagas: {{$menordiez}}</p>
    @elseif($hrs>=11)
        <p>Pagas: {{$mayordiez}}</p>
    @endif
@stop
@section('footer')

@stop


