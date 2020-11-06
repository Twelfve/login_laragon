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
    @if($calif <= 5)
        <p>Sacaste F</p>
    @elseif($calif<=7)
        <p>Sacaste D</p>
    @elseif($calif<=8)
        <p>Sacaste C</p>
    @elseif($calif<=9)
        <p>Sacaste B</p>
    @elseif($calif==10)
        <p>Sacaste A</p>
    @endif
@stop
@section('footer')

@stop


