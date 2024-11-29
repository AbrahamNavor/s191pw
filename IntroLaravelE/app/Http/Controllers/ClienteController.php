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
        return view('clientes');
    }


    public function create()
    {
        return view('formulario');
    }


    public function store(Request $request)
    {
        //
    }


    public function show(cliente $cliente)
    {
        //
    }


    public function edit(cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cliente $cliente)
    {
        //
    }
}
