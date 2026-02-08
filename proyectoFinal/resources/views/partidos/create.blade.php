<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Partido</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <div class="card shadow border-danger">
        <div class="card-header bg-danger text-white">
            <h3 class="mb-0">Nuevo Partido</h3>
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

            <form method="POST" action="{{ route('partidos.store') }}">
                @csrf
                
                <div class="mb-3">
                    <label class="form-label">Competición:</label>
                    <select name="liga_id" class="form-select" required>
                        @foreach($ligas as $liga)
                            <option value="{{ $liga->id }}">{{ $liga->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Equipo Local:</label>
                        <select name="club_local_id" class="form-select" required>
                            @foreach($clubs as $club)
                                <option value="{{ $club->id }}">{{ $club->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Equipo Visitante:</label>
                        <select name="club_visitante_id" class="form-select" required>
                            @foreach($clubs as $club)
                                <option value="{{ $club->id }}">{{ $club->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Fecha:</label>
                    <input type="date" name="fecha" class="form-control" required>
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ route('menu') }}" class="btn btn-secondary">⬅ Volver al Menú</a>
                    <button type="submit" class="btn btn-danger">Registrar Partido</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>