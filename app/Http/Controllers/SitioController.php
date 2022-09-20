<?php

namespace App\Http\Controllers;


use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Http\Request;
use  Illuminate\Support\Facades\DB;

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
            'nombre'=>'required',
            'correo'=>'required',
            'comentario'=>'required',

        ]);
        ///Insercion BD
        /*DB::table('contactos')->insert([

            'nombre' => $request->nombre,
            'correo' => $request->correo,
            'comentario' => $request->comentario,

        ]);*/
        DB::table('contactos')->insert($request->except('_token'));
        ///Redireccion
        return redirect('/contacto');

    }
}
