<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Clubes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2 class="mb-4 text-success">Listado de Clubes</h2>
    @if(session('success')) <div class="alert alert-success">{{ session('success') }}</div> @endif

    <div class="d-flex justify-content-between mb-3">
        <a href="{{ route('menu') }}" class="btn btn-secondary">⬅ Menú</a>
        <a href="{{ route('clubs.create') }}" class="btn btn-success">➕ Nuevo Club</a>
    </div>

    <table class="table table-bordered">
        <thead class="table-success">
            <tr><th>Nombre</th><th>Ciudad</th><th>Categoría</th><th>Acciones</th></tr>
        </thead>
        <tbody>
            @foreach($clubs as $club)
            <tr>
                <td>{{ $club->nombre }}</td><td>{{ $club->ciudad }}</td><td>{{ $club->categoria }}</td>
                <td>
                    <a href="{{ route('clubs.edit', $club->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('clubs.destroy', $club->id) }}" method="POST" class="d-inline">
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