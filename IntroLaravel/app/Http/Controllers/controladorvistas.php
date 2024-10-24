<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorvistas extends Controller
{
    public function home(){
        return view('inicio');
    }

    public function insert(){
        return view('formulario');
    }

    public function select(){
        return view('clientes');
    }

    public function procesarCliente(Request $peticion){

       //  return redirect('/'); //Redirección usando la ruta

        // return redirect()->route('rutaconsulta'); //Redirección usando el nombre de ruta;

        //return back(); //Redirección al origen de la petición

        //$id = [['usuario' => '1'],['usuario' => '2']]; //Redirección con valores adjunto (variables, arreglos, etc)
        //return view('formulario', compact('id'));

        $usuario = $peticion->input('txtnombre'); //Redirección enviando msj en session
        session()->flash('exito', 'Se guardo el usuario: '.$usuario);

        return to_route('rutacacas');
    }
}