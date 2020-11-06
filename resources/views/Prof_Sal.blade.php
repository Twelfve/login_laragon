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
    @for($i=1; $i<=6; $i++)
        <?php
        $aumento = $salario*0.1;
        $salario = $salario+$aumento;

        ?>
        <p>Salario el {{$i}} anio es de: {{$salario}}</p><br>
    @endfor
@stop
@section('footer')

@stop



