@extends('layouts.nav')

@section('titulo', 'Portada - Practica Repasos')

@section('contenido1')
    <div class="container">
        <header>
            
        </header>

        <div class="jumbotron text-center mt-5">
            <h1 class="display-4">Bienvenido a Practica Repasos</h1>
            <p class="lead">Este es un sitio para realizar repasos vistos en clases. Universidad Politécnica de Querétaro. Pérez Navor Abraham - s191.</p>
            <a class="btn btn-primary btn-lg mt-3" href="{{ route('rutarepaso1') }}" role="button">REPASO 1</a>
        </div>

        <div class="row">
            <div class="col-md-4">
                <h2>Título #1</h2>
                <p>Se vendeeeeeeeeeeen tamaleeeeeeeeeeees oaxaqueñooooooooos.</p>
                <p>Compraaaamos carrooos y camionetaaas viejaaaas para desarmaaar</p>
            </div>
            <div class="col-md-4">
                <h2>Título #2</h2>
                <p>Halls, Clorets, pepitorias, cacahuate
                    Tridents, chocolate, Mazapanes, cigarros y Tic Tac
                    Rosas, bolas y tamal
                    Nueces y pitachios
                    Cocadas de coco y plátanos asados
                    Pingüinos, abanicos y Pelones
                    Ranas y Panditas
                    Motos, burbujas y carros</p>
            </div>
            <div class="col-md-4">
                <h2>Título #3</h2>
                <p>Jamaica colombiana
                    Tarjeta Telcel, Tarjeta Movistar, Tarjeta Multifon
                    Bombones del América y las Chivas
                    ¿Y que te voy a dar?
                    Taka, tataka, taka-taka-ta</p>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection