<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Club</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <h2>Nuevo Club</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('clubs.store') }}">
        @csrf  
        
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del Club:</label>
            <input type="text" name="nombre" class="form-control" value="{{ old('nombre') }}" required>
        </div>

        <div class="mb-3">
            <label for="ciudad" class="form-label">Ciudad:</label>
            <input type="text" name="ciudad" class="form-control" value="{{ old('ciudad') }}" required>
        </div>

        <div class="mb-3">
            <label for="categoria" class="form-label">Categoría (Ej: Primera, Segunda):</label>
            <input type="text" name="categoria" class="form-control" value="{{ old('categoria') }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Registrar Club</button>
        <a href="{{ url('/') }}" class="btn btn-secondary">Volver al inicio</a>
    </form>

</body>
</html>