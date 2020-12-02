<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Estructuras_De_Control extends Controller
{
    //
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
