@extends('layouts.master')
@section('title', $title)
@section('header')

@stop
@section('navbar')
    <h2>Secuenciales(ROUTE)</h2>
    <ul>
        <li><a href="{{route('Area Trapecio')}}">Calcular El Area De Un Trapecio</a></li>
        <li><a href="{{route('Apotema Cuadrado')}}">Calcular El Apotema De Un Cuadrado</a></li>
        <li><a href="{{route('Volumen Cono')}}">Calcular El Volumen De Un Cono</a></li>
        <li><a href="{{route('Area Triangulo')}}">Calcular El Area De Un Triangulo</a></li>
        <li><a href="{{route('Circunferencia')}}">Calcular Una Circunferencia</a></li>
    </ul>
    <h2>Desiciones(ACTION)</h2>
    <ul>
        <li><a href="{{action('Estructuras_De_Control@Votar')}}">Votar O No Votar</a></li>
        <li><a href="{{action('Estructuras_De_Control@CatorceFeb')}}">Catorce De Febrero</a></li>
        <li><a href="{{action('Estructuras_De_Control@Calif')}}">Calificacion</a></li>
        <li><a href="{{action('Estructuras_De_Control@Sueldo')}}">Sueldo</a></li>
        <li><a href="{{action('Estructuras_De_Control@Estac')}}">Estacionamiento</a></li>
    </ul>
    <h2>Ciclos(ACTION)</h2>
    <ul>
        <li><a href="{{action('Estructuras_De_Control@Cero')}}">Cuantos son ceros</a></li>
        <li><a href="{{action('Estructuras_De_Control@AprobReprob')}}">Aprobados y Reprobados</a></li>
        <li><a href="{{action('Estructuras_De_Control@Tab_Mult')}}">Tabla De Multiplicar</a></li>
        <li><a href="{{action('Estructuras_De_Control@Prof_Sal')}}">Salario de Un Profesor</a></li>
        <li><a href="{{action('Estructuras_De_Control@Caja_Reg')}}">Caja Registradora</a></li>
    </ul>
@stop
@section('content')

@stop
@section('footer')

@stop
