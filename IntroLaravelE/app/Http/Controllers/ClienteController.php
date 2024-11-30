<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function home()
    {
        return view('inicio');
    }

    public function index()
    {
        $consulta = cliente::all();
        return view('clientes', compact('consulta'));
    }


    public function create()
    {
        return view('formulario');
    }


    public function store(Request $request)
    {
        $addcliente = new cliente();
        $addcliente->nombre = $request->input('txtnombre');
        $addcliente->apellido = $request->input('txtapellido');
        $addcliente->correo = $request->input('txtcorreo');
        $addcliente->telefono = $request->input('txttelefono');
        $addcliente->save();

        $usuario = $request->input('txtnombre');
        session()->flash('exito','El cliente '.$usuario.' ha sido registrado con éxito');
        return redirect()->back();

    }


    public function show(cliente $cliente)
    {
        //
    }


    public function edit(cliente $cliente)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $upCliente = cliente::find($id);
        $upCliente->nombre = $request->input('txtnombre');
        $upCliente->apellido = $request->input('txtapellido');
        $upCliente->correo = $request->input('txtcorreo');
        $upCliente->telefono = $request->input('txttelefono');
        $upCliente->save();

        $usuario = $request->input('txtnombre');
        session()->flash('exito','El cliente '.$usuario.' ha sido actualizado con éxito');
        return redirect()->back();

    }

    public function destroy(Request $request, $id)
    {
        $delCliente = cliente::find($id);
        $delCliente->delete();
        
        session()->flash('exito','El cliente ha sido eliminado con éxito');
        return redirect()->back();
    }
}
