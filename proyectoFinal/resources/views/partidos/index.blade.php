<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Partidos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2 class="mb-4 text-danger">🆚 Listado de Partidos</h2>
    
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="d-flex justify-content-between mb-3">
        <a href="{{ route('menu') }}" class="btn btn-secondary">⬅ Menú Principal</a>
        <a href="{{ route('partidos.create') }}" class="btn btn-danger">➕ Nuevo Partido</a>
    </div>

    <table class="table table-bordered align-middle text-center">
        <thead class="table-danger">
            <tr>
                <th>Fecha</th>
                <th>Competición</th>
                <th>Local</th>
                <th>Result.</th>
                <th>Visitante</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($partidos as $partido)
            <tr>
                <td>{{ $partido->fecha }}</td>
                <td>{{ $partido->liga ? $partido->liga->nombre : 'Sin Liga' }}</td>
                <td class="fw-bold text-end">{{ $partido->equipoLocal ? $partido->equipoLocal->nombre : 'Desconocido' }}</td>
                <td class="bg-light fw-bold">{{ $partido->resultado ?? 'VS' }}</td>
                <td class="fw-bold text-start">{{ $partido->equipoVisitante ? $partido->equipoVisitante->nombre : 'Desconocido' }}</td>
                <td>
                    <a href="{{ route('partidos.edit', $partido->id) }}" class="btn btn-primary btn-sm">Editar</a>
                    <form action="{{ route('partidos.destroy', $partido->id) }}" method="POST" class="d-inline">
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