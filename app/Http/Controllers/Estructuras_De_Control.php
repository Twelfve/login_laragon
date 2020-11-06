<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Estructuras_De_Control extends Controller
{
    //
    public function Archivo (){
        return view('archivo', array(
            'title' => 'Archivo'
        ));
    }

    public function Calc_Ar_Trap ($basemenor = 20, $basemayor = 40, $altura = 15){
        $area = (($basemayor+$basemenor)/2)*$altura;
        return view('Calc_Ar_Trap', array(
            'area' => $area,
            'title' => 'Calcular Area de un Trapecio'
        ));
    }

    public function Calc_Ap_Cuad ($lado = 50){
        $apotema = $lado/2;
        return view('Calc_Ap_Cuad', array(
            'apotema' => $apotema,
            'title' => 'Calcular Apotema de un Cuadrado'
        ));
    }

    public function Calc_Vol_Cono ($radio = 16, $altura = 36) {
        $vol = ((pi()*pow($radio, 2))*$altura)/3;
        return view('Calc_Vol_Cono', array(
            'vol' => $vol,
            'title' => 'Calcular Volumen de un Cono'
        ));
    }

    public function Calc_Ar_Tri ($base = 50, $altura = 10) {
        $area = $base*$altura/2;
        return view('Calc_Ar_Tri', array(
            'area' => $area,
            'title' => 'Calcular Area de un Triangulo'
        ));
    }

    public function Calc_Circun ($radio = 8) {
        $circ = pi()*($radio*2);
        return view('Calc_Circun', array(
            'radio' => $radio,
            'circ' => $circ,
            'title' => 'Calcular Circunferencia'
        ));
    }

    public function Votar () {
        $edad = 16;
        return view('Votar')
            ->with('edad', $edad)
            ->with('title', 'Votar');
    }

    public function CatorceFeb () {
        $dinero = 250;
        return view('CatorceFeb')
            ->with('dinero', $dinero)
            ->with('title', 'Catorce de Febrero');
    }

    public function Calif () {
        $calif = 6;
        return view('Calif')
            ->with('calif', $calif)
            ->with('title', 'Calificaiones');
    }

    public function Sueldo () {
        $hrstr = 40;
        $pphora = 10;
        $pphoraextra = $pphora*2;
        $sueldo = $hrstr*$pphora;
        $hrsextras = $hrstr-40;
        $sueldoextra = (40*$pphora)+($hrsextras*$pphoraextra);
        return view('Sueldo')
            ->with('hrstr', $hrstr)
            ->with('sueldo', $sueldo)
            ->with('sueldoextra', $sueldoextra)
            ->with('title', 'Sueldo');
    }

    public function Estac () {
        $hrs = 11;
        $treshrs = $hrs-2;
        $menorcinc = 10+($treshrs*4);
        $cincohrs = $hrs-5;
        $menordiez = 22+($cincohrs*3);
        $despdiez = $hrs-10;
        $mayordiez = 37+($despdiez*2);
        return view('Estac')
            ->with('hrs', $hrs)
            ->with('menorcinc', $menorcinc)
            ->with('menordiez', $menordiez)
            ->with('mayordiez', $mayordiez)
            ->with('title', 'Estacionamiento');
    }

    public function Cero () {
        $cer = 0;
        $maceros = 0;
        $meceros = 0;
        $var1=1;
        $var2=10;
        return view('Cero', array(
            'cer' => $cer,
            'maceros' => $maceros,
            'meceros' => $meceros,
            'var1' => $var1,
            'var2' => $var2,
            'title' => 'Cero'
        ));
    }

    public function AprobReprob () {
        $aprob = 0;
        $reprob = 0;
        $var1 = 1;
        $var2 = 10;
        return view('AprobReprob', array(
            'aprob' => $aprob,
            'reprob' => $reprob,
            'var1' => $var1,
            'var2' => $var2,
            'title' => 'Aprobados Reprobados'
        ));
    }

    public function Tab_Mult () {
        $num = 8;
        return view('Tab_Mult', array(
            'num' => $num,
            'title' => 'Tabla de Multiplicacion'
        ));
    }

    public function Prof_Sal () {
        $salario = 1500;
        return view('Prof_Sal', array(
            'salario' => $salario,
            'title' => 'Profesor Salario'
        ));
    }

    public function Caja_Reg () {
        $billetes = 10;
        $monedas = 10;
        $valorbill = 20;
        $valormon = 5;
        return view('Caja_Reg', array(
            'billetes' => $billetes,
            'monedas' => $monedas,
            'valorbill' => $valorbill,
            'valormon' => $valormon,
            'title' => 'Caja Registradora'
        ));
    }

    public function login(){
        return view('formulario.login', array(
            'title' => 'Login'
        ));
    }

    public function validarlogin(Request $request){
        $user = $request->input('user');
        $pass = $request->input('pass');
        $key = $request->input('key');

        if($user === 'Twelfve'){
            $url='formulario.dashboard';
        }
        else{
            $url='formulario.login';
        }
        return view($url, array(
            'title' => 'Login',
            'user' => $request->input('user')
        ));
    }

    public function davinci(){
        return view('pintores.davinci', array(
            'title' => 'Davinci'
        ));
    }

    public function frida(){
        return view('pintores.frida', array(
            'title' => 'Frida'
        ));
    }

    public function miguel(){
        return view('pintores.miguel', array(
            'title' => 'Miguel'
        ));
    }

    public function pablo(){
        return view('pintores.pablo', array(
            'title' => 'Pablo'
        ));
    }

    public function vincent(){
        return view('pintores.vincent', array(
            'title' => 'Vincent'
        ));
    }
}
