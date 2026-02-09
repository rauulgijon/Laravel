<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Club</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <div class="card shadow border-success">
        <div class="card-header bg-success text-white"><h3>✏️ Editar Club</h3></div>
        <div class="card-body">
            <form method="POST" action="{{ route('clubs.update', $club->id) }}">
                @csrf @method('PUT')
                
                <div class="mb-3"><label>Nombre:</label>
                    <input type="text" name="nombre" class="form-control" value="{{ $club->nombre }}" required></div>
                
                <div class="mb-3"><label>Ciudad:</label>
                    <input type="text" name="ciudad" class="form-control" value="{{ $club->ciudad }}" required></div>

                <div class="mb-3"><label>Categoría:</label>
                    <input type="text" name="categoria" class="form-control" value="{{ $club->categoria }}" required></div>

                <button type="submit" class="btn btn-success">Actualizar Club</button>
                <a href="{{ route('clubs.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>
</body>
</html>