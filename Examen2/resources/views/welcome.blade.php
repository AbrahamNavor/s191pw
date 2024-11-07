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
            <input type="text" name="txtnombre" >
        </div>
        <div>
            <label for="marca">Marca:</label>
            <input type="text" name="txtmarca">
        </div>
        <div>
            <label for="cantidad">Cantidad:</label>
            <input type="number"  name="txtcantidad">
        </div>
        <div>
            <button type="submit">Enviar</button>
        </div>
    </form>
</body>
</html>