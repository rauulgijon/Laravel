<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Liga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-warning"><h3>Editar Liga</h3></div>
        <div class="card-body">
            <form method="POST" action="{{ route('ligas.update', $liga->id) }}">
                @csrf @method('PUT')
                
                <div class="mb-3">
                    <label>Nombre:</label>
                    <input type="text" name="nombre" class="form-control" value="{{ $liga->nombre }}" required>
                </div>
                <div class="mb-3">
                    <label>Deporte:</label>
                    <input type="text" name="deporte" class="form-control" value="{{ $liga->deporte }}" required>
                </div>
                <div class="mb-3">
                    <label>Temporada:</label>
                    <input type="text" name="temporada" class="form-control" value="{{ $liga->temporada }}" required>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('ligas.index') }}" class="btn btn-secondary">Cancelar</a>
                    <button type="submit" class="btn btn-warning">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>