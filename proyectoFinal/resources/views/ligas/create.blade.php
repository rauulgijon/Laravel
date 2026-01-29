<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Liga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <h2>Nueva Liga</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('ligas.store') }}">
        @csrf  
        
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre de la Liga:</label>
            <input type="text" name="nombre" class="form-control" value="{{ old('nombre') }}" required>
        </div>

        <div class="mb-3">
            <label for="deporte" class="form-label">Deporte:</label>
            <input type="text" name="deporte" class="form-control" value="{{ old('deporte') }}" required>
        </div>

        <div class="mb-3">
            <label for="temporada" class="form-label">Temporada (Ej: 2023-2024):</label>
            <input type="text" name="temporada" class="form-control" value="{{ old('temporada') }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Crear Liga</button>
    </form>

</body>
</html>