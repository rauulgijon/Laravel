<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Partido</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <div class="card shadow border-danger">
        <div class="card-header bg-danger text-white">
            <h3>✏️ Editar Partido</h3>
        </div>
        <div class="card-body">
            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>@foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach</ul>
                </div>
            @endif

            <form method="POST" action="{{ route('partidos.update', $partido->id) }}">
                @csrf 
                @method('PUT') <div class="mb-3">
                    <label class="form-label">Competición:</label>
                    <select name="liga_id" class="form-select">
                        @foreach($ligas as $liga)
                            <option value="{{ $liga->id }}" {{ $partido->liga_id == $liga->id ? 'selected' : '' }}>
                                {{ $liga->nombre }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="row">
                    <div class="col-md-5 mb-3">
                        <label class="form-label">Local:</label>
                        <select name="club_local_id" class="form-select">
                            @foreach($clubs as $club)
                                <option value="{{ $club->id }}" {{ $partido->club_local_id == $club->id ? 'selected' : '' }}>
                                    {{ $club->nombre }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-2 mb-3">
                        <label class="form-label">Resultado:</label>
                        <input type="text" name="resultado" class="form-control text-center" value="{{ $partido->resultado }}" placeholder="Ej: 2-1">
                    </div>

                    <div class="col-md-5 mb-3">
                        <label class="form-label">Visitante:</label>
                        <select name="club_visitante_id" class="form-select">
                            @foreach($clubs as $club)
                                <option value="{{ $club->id }}" {{ $partido->club_visitante_id == $club->id ? 'selected' : '' }}>
                                    {{ $club->nombre }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Fecha:</label>
                    <input type="date" name="fecha" class="form-control" value="{{ $partido->fecha }}">
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ route('partidos.index') }}" class="btn btn-secondary">Cancelar</a>
                    <button type="submit" class="btn btn-warning">Guardar Cambios</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>