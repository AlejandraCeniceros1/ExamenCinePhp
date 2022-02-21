<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de funciones</title>
</head>
<body>
<a style="color: #E59866" href="{{route('funciones.create')}}">Añadir Funcion</a>
    <h1>Funciones</h1>
    <table>
        <thead>
            <tr>
                <th>Película              ||</th>
                <td><td>
                <th>    Fecha  ||</th><td><td>
                <th>    Hora ||</th><th></th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($funciones as $funcion)
                <tr>
                    <td>{{$funcion->pelicula}}</td>
                    <td><td>
                    <td>{{$funcion->fecha}}</td>
                    <td><td>
                    <td>{{$funcion->hora}}</td>
                    <td>
                    <td>
                        <a>
                        <form method="post" action ="{{route('funciones.destroy', $funcion->id)}}">
                            @csrf
                            @method('delete')
                            <button style="background-color: #D7DBDD" type="submit"> Eliminar </button>
                        </form>
                        </a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>