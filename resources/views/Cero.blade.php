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
    @while ($var1 <= $var2)
        <?php
        $num = rand(-10,10);
        echo $num . '<br>';
        ?>
        @if ($num>0)
            <?php
            $maceros += 1;
            $var1 += 1;
            ?>

        @elseif ($num == 0)
            <?php
            $cer += 1;
            $var1 += 1;
            ?>

        @elseif ($num < 0)
            <?php
            $meceros += 1;
            $var1 += 1;
            ?>
        @endif
    @endwhile

    <h1>Cantidad de numeros:10</h1>
    <h1>Numeros mayores a cero: {{$maceros}}</h1>
    <h1>Numeros menores a cero: {{$meceros}}</h1>
    <h1>Numeros iguales a cero: {{$cer}}</h1>

@stop
@section('footer')

@stop


