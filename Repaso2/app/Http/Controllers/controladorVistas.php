<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorCliente;


class controladorVistas extends Controller
{
    public function inicio()
    {
        return view('inicio');
    }

    public function registro()
    {
        return view('registro');
    }

    public function procesaRegistro(validadorCliente $procesa)
    {
        $libro = $procesa->input('txttitulo');
        session()->flash('exito', 'El libro '.$libro.' ha sido registrado');

        return to_route('rutainicio');
    }
}
