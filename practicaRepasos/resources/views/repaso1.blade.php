@extends('layouts.nav')

@section('titulo', 'Repaso 1 - Practica Repasos')

@section('contenido1')

<div class="d-flex justify-content-center align-items-center min-vh-100 gap-3">

    <x-card encabezado="Convertidor" titulo="Aqui podras convertir tus archivos :)">
        <form action="/convertidor" method="POST">
            @csrf
              <div class="mb-3">
                <label for="disabledSelect" class="form-label">Ingresa el VALOR: </label>
                <input type="number" name="entrada" class="form-control" placeholder="Aqui pega el valor.." required>
                <label for="disabledSelect" class="form-label">Selecciona el Convertidor: </label>
                <select name="salida" class="form-select">
                  <option value="MB-GB">MB a GB</option>
                  <option value="GB-MB">GB a MB</option>
                  <option value="GB-TB">GB a TB</option>
                  <option value="TB-GB">TB a GB</option>
                </select>
              </div>
              <button type="submit" class="btn btn-primary">Convertir</button>
          </form>
    </x-card>
</div>
@endsection