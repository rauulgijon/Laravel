<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <div class="card shadow border-warning">
        <div class="card-header bg-warning"><h3>Editar Jugador</h3></div>
        <div class="card-body">
            <form method="POST" action="{{ route('jugadores.update', $jugador->id) }}">
                @csrf @method('PUT')
                
                <div class="mb-3"><label>Nombre:</label>
                    <input type="text" name="nombre" class="form-control" value="{{ $jugador->nombre }}" required></div>
                
                <div class="mb-3"><label>Dorsal:</label>
                    <input type="number" name="dorsal" class="form-control" value="{{ $jugador->dorsal }}" required></div>

                <div class="mb-3"><label>Posición:</label>
                    <select name="posicion" class="form-select">
                        <option value="Portero" {{ $jugador->posicion == 'Portero' ? 'selected' : '' }}>Portero</option>
                        <option value="Defensa" {{ $jugador->posicion == 'Defensa' ? 'selected' : '' }}>Defensa</option>
                        <option value="Medio" {{ $jugador->posicion == 'Medio' ? 'selected' : '' }}>Medio</option>
                        <option value="Delantero" {{ $jugador->posicion == 'Delantero' ? 'selected' : '' }}>Delantero</option>
                    </select>
                </div>

                <div class="mb-3"><label>Club:</label>
                    <select name="club_id" class="form-select">
                        @foreach($clubs as $club)
                            <option value="{{ $club->id }}" {{ $jugador->club_id == $club->id ? 'selected' : '' }}>
                                {{ $club->nombre }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-warning">Guardar Cambios</button>
                <a href="{{ route('jugadores.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>
</body>
</html>