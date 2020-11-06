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
    @for($i=1; $i<=10; $i++)
        <p>{{$i}}x{{$num}}={{$i*$num}}</p>
    @endfor
@stop
@section('footer')

@stop


