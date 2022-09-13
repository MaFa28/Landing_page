<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Http\Request;

class SitioController extends Controller
{
    public function landingpage(){
        return view('landingpage');
    }

    public function contacto(){
        return view('contacto');
    }

    public function recibeFormContacto(Request $request){
        ///Verificacion de info
        //dd($request->all());
        //dd($request->Nombre,$request->correo,$request->comentario);
        ///validacion
        $request->validate([
            'Nombre'=>'required',
            'correo'=>'required',
            'comentario'=>'required',

        ]);
        ///Insercion BD
        ///Redireccion

    }
}
