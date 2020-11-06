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

Route::get('/archivo', [
    'uses' => 'Estructuras_De_Control@Archivo',
    'as' => 'Archivo'
]);

Route::get('/artrap/{bmenor?}/{bmayor?}/{altura?}', [
    'uses' => 'Estructuras_De_Control@Calc_Ar_Trap',
    'as' => 'Area Trapecio'
]);

Route::get('/apocuad/{lado?}', [
    'uses' => 'Estructuras_De_Control@Calc_Ap_Cuad',
    'as' => 'Apotema Cuadrado'
]);

Route::get('/vol/{radio?}/{altura?}', [
    'uses' => 'Estructuras_De_Control@Calc_Vol_Cono',
    'as' => 'Volumen Cono'
]);

Route::get('/artriang/{base?}/{altura?}', [
    'uses' => 'Estructuras_De_Control@Calc_Ar_Tri',
    'as' => 'Area Triangulo'
]);

Route::get('/circ/{radio?}', [
    'uses' => 'Estructuras_De_Control@Calc_Circun',
    'as' => 'Circunferencia'
]);

Route::get('/votar', [
    'uses' => 'Estructuras_De_Control@Votar',
    'as' => 'Votar'
]);

Route::get('/14feb', [
    'uses' => 'Estructuras_De_Control@CatorceFeb',
    'as' => 'Catorce de Febrero'
]);

Route::get('/calif', [
    'uses' => 'Estructuras_De_Control@Calif',
    'as' => 'Calificaciones'
]);

Route::get('/sueldo', [
    'uses' => 'Estructuras_De_Control@Sueldo',
    'as' => 'Sueldo'
]);

Route::get('/estac', [
    'uses' => 'Estructuras_De_Control@Estac',
    'as' => 'Estacionamiento'
]);

Route::get('/cero', [
    'uses' => 'Estructuras_De_Control@Cero',
    'as' => 'Cero'
]);

Route::get('/aprorepro', [
    'uses' => 'Estructuras_De_Control@AprobReprob',
    'as' => 'Aprobados y Reprobados'
]);

Route::get('/tablamult', [
    'uses' => 'Estructuras_De_Control@Tab_Mult',
    'as' => 'Tabla de Multiplicar'
]);

Route::get('/profsal', [
    'uses' => 'Estructuras_De_Control@Prof_Sal',
    'as' => 'Profesor Salario'
]);

Route::get('/cajareg', [
    'uses' => 'Estructuras_De_Control@Caja_Reg',
    'as' => 'Caja Registradora'
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
