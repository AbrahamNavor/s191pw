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

        $validacion = $peticion->validate([
            'txtnombre' => 'required|alpha|min:3|max:20',
            'txtapellido' => 'required|min:3|max:20',
            'txtcorreo' => 'required|:string|email',
            'txttelefono' => 'required|numeric',
        ]);

        $usuario = $peticion->input('txtnombre'); //Redirección enviando msj en session
        session()->flash('exito', 'Se guardo el usuario: '.$usuario);

        return to_route('rutacacas');
    }
}