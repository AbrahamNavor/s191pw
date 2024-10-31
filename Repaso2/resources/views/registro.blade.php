@extends('layouts.plantilla')

@section('title', 'Registro')

@section('contenido')

<div class="d-flex justify-content-center">
    <form action="" method="" class="form-container w-50">
        @csrf
        <h1 class="text-center">Registro de Libros</h1>
        <div class="form-group">
            <label for="isbn">ISBN:</label>
            <input type="text" id="isbn" name="isbn" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="autor">Autor:</label>
            <input type="text" id="autor" name="autor" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="paginas">Páginas:</label>
            <input type="number" id="paginas" name="paginas" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="año">Año:</label>
            <input type="number" id="año" name="año" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="editorial">Editorial:</label>
            <input type="text" id="editorial" name="editorial" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email_editorial">Email de Editorial:</label>
            <input type="email" id="email_editorial" name="email_editorial" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success text-center">Registrar</button>
    </form>
</div>

@endsection