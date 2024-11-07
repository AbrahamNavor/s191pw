<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Utiles Escolares</title>
</head>
<body>
    <h1>Utiles Escolares</h1>
    <form method="POST" action="{{ route('rutapeticion') }}">
    @csrf
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" name="txtnombre" value="{{ old('txtnombre') }}">
            @if ($errors->has('txtnombre'))
                <small>{{ $errors->first('txtnombre') }}</small>
            @endif
        </div>
        <div>
            <label for="marca">Marca:</label>
            <input type="text" name="txtmarca" value="{{ old('txtmarca') }}">
            @if ($errors->has('txtmarca'))
                <small>{{ $errors->first('txtmarca') }}</small>
            @endif
        </div>
        <div>
            <label for="cantidad">Cantidad:</label>
            <input type="number" name="txtcantidad" value="{{ old('txtcantidad') }}">
            @if ($errors->has('txtcantidad'))
                <small>{{ $errors->first('txtcantidad') }}</small>
            @endif
        </div>
        <div>
            <button type="submit">Enviar</button>
        </div>
    </form>
</body>
</html>