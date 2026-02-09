<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Ligas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2 class="mb-4">🏆 Listado de Ligas</h2>
    
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="d-flex justify-content-between mb-3">
        <a href="{{ route('menu') }}" class="btn btn-secondary">⬅ Menú Principal</a>
        <a href="{{ route('ligas.create') }}" class="btn btn-primary">➕ Nueva Liga</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Nombre</th>
                <th>Deporte</th>
                <th>Temporada</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ligas as $liga)
            <tr>
                <td>{{ $liga->nombre }}</td>
                <td>{{ $liga->deporte }}</td>
                <td>{{ $liga->temporada }}</td>
                <td>
                    <a href="{{ route('ligas.edit', $liga->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('ligas.destroy', $liga->id) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Borrar?')">Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>