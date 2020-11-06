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
    @if($dinero <10)
        <p>Compras tarjeta</p>
    @elseif($dinero <100)
        <p>Compras Chocolates</p>
    @elseif($dinero <=250)
        <p>Compras Flores</p>
    @elseif($dinero >250)
        <p>Compras Joyas</p>
    @endif
@stop
@section('footer')

@stop


