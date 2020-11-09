<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [
    'uses' => 'Estructuras_De_Control@login',
    'as' => 'login'
]);

Route::post('/validar', [
    'uses' => 'Estructuras_De_Control@validarlogin',
    'as' => 'validar'
]);

Route::get('/davinci', [
    'uses' => 'Estructuras_De_Control@davinci',
    'as' => 'Davinci'
]);

Route::get('/frida', [
    'uses' => 'Estructuras_De_Control@frida',
    'as' => 'Frida'
]);

Route::get('/miguel', [
    'uses' => 'Estructuras_De_Control@miguel',
    'as' => 'Miguel'
]);

Route::get('/pablo', [
    'uses' => 'Estructuras_De_Control@pablo',
    'as' => 'Pablo'
]);

Route::get('/vincent', [
    'uses' => 'Estructuras_De_Control@vincent',
    'as' => 'Vincent'
]);
