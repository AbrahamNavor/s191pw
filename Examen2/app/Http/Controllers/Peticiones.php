<?php

namespace App\Http\Controllers;

class Peticiones extends Controller
{
    public function welcome(){
        return view('welcome');
    }  

    public function peticion(){
        $nombre = request('txtnombre');
        $marca = request('txtmarca');
        return "Se guardo: $nombre marca: $marca";

    }
    
    public function valicacion(){
        return request()->validate([
            'txtnombre' => 'required',
            'txtmarca' => 'required',
            'txtcantidad' => 'required|numeric' 
        ]);

    }

}
