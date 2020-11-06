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
    @for($i=1; $i<=$billetes; $i++)
        <?php
        $totalbill = $i*$valorbill;
        ?>
    @endfor
    @for($i=1; $i<=$monedas; $i++)
        <?php
        $totalmon = $i*$valormon;
        ?>
    @endfor
    <h1>Total de la caja registradora: {{$totalbill+$totalmon}}</h1>
@stop
@section('footer')

@stop


