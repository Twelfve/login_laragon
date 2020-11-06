@extends('layouts.master')
@section('title', $title)
@section('header')

@stop
@section('navbar')
@stop
@section('content')
    <form action="{{action('Estructuras_De_Control@validarlogin')}}" method="POST">
        {{csrf_field()}}
        <label for="user">User</label>
        <input type="text" name="user">
        <br>
        <label for="pass">Password</label>
        <input type="password" name="pass">
        <br>
        <label for="key">Key</label>
        <input type="text" name="key">
        <br>
        <input type="submit" value="submit">
    </form>
@stop
@section('footer')

@stop
