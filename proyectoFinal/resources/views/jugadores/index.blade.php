<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista Jugadores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2 class="mb-4 text-warning-emphasis">Listado de Jugadores</h2>
    @if(session('success')) <div class="alert alert-success">{{ session('success') }}</div> @endif

    <div class="d-flex justify-content-between mb-3">
        <a href="{{ route('menu') }}" class="btn btn-secondary">⬅ Menú</a>
        <a href="{{ route('jugadores.create') }}" class="btn btn-warning">➕ Nuevo Jugador</a>
    </div>

    <table class="table table-bordered">
        <thead class="table-warning">
            <tr><th>Nombre</th><th>Posición</th><th>Dorsal</th><th>Club</th><th>Acciones</th></tr>
        </thead>
        <tbody>
            @foreach($jugadores as $jugador)
            <tr>
                <td>{{ $jugador->nombre }}</td>
                <td>{{ $jugador->posicion }}</td>
                <td>{{ $jugador->dorsal }}</td>
                <td>{{ $jugador->club ? $jugador->club->nombre : 'Sin Club' }}</td>
                <td>
                    <a href="{{ route('jugadores.edit', $jugador->id) }}" class="btn btn-primary btn-sm">Editar</a>
                    <form action="{{ route('jugadores.destroy', $jugador->id) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro?')">Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>