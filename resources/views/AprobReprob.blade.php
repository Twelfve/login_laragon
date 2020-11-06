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
    @while($var1 <= $var2)
        <?php
        $calif = rand(0,10);
        echo $calif .  '<br>';
        ?>
        @if($calif>=6)
            <?php
            $aprob +=1;
            $var1 +=1;
            ?>

        @elseif($calif <=5)
            <?php
            $reprob +=1;
            $var1 +=1;
            ?>
        @endif
    @endwhile
    <h1>Cantidad De Calificaciones: {{$var2}}</h1>
    <h1>Alumnos aprobados: {{$aprob}}</h1>
    <h1>Alumnos reprob:{{$reprob}}</h1>
@stop
@section('footer')

@stop




