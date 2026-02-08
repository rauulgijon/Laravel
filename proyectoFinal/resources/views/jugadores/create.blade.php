<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Jugador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <div class="card shadow border-warning">
        <div class="card-header bg-warning text-dark">
            <h3 class="mb-0">Nuevo Jugador</h3>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('jugadores.store') }}">
                @csrf
                
                <div class="mb-3">
                    <label class="form-label">Nombre:</label>
                    <input type="text" name="nombre" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Posición:</label>
                    <select name="posicion" class="form-select">
                        <option value="Portero">Portero</option>
                        <option value="Defensa">Defensa</option>
                        <option value="Medio">Medio</option>
                        <option value="Delantero">Delantero</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Dorsal:</label>
                    <input type="number" name="dorsal" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Club:</label>
                    <select name="club_id" class="form-select" required>
                        <option value="">-- Selecciona un Club --</option>
                        @foreach($clubs as $club)
                            <option value="{{ $club->id }}">{{ $club->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ route('menu') }}" class="btn btn-secondary">⬅ Volver al Menú</a>
                    <button type="submit" class="btn btn-warning">Registrar Jugador</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>