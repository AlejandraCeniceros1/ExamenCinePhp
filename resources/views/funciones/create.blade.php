<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Funcion</title>
</head>
<body>
    <h1>Crear Funcion</h1>
    <a style="color: #E59866" href="{{route('funciones.index')}}"> De vuelta a la lista </a>
    <br>
        <br>
    <form method="post" action="{{route('funciones.store')}}">
        @csrf
        <label>Nombre de la Pelicula</label>
        <input type ="text" name="pelicula">
        <br>
        <br>
        <label>Fecha</label>
        <input type ="date" name="fecha" rows="2"></input>
        <br>
        <br>
        <label>Hora</label>
        <input type ="time" name="hora">
        <br>
        <br>
        <br>
        <button style="background-color: #A9DFBF" type="submit">Guardar</button>
    </form>

</body>
</html>