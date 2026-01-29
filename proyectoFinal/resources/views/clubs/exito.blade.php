<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Club Creado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <div class="alert alert-success">
        <h3>¡Club registrado correctamente!</h3>
        <ul>
            <li><strong>Nombre:</strong> {{ $club['nombre'] }}</li>
            <li><strong>Ciudad:</strong> {{ $club['ciudad'] }}</li>
            <li><strong>Categoría:</strong> {{ $club['categoria'] }}</li>
        </ul>
        
        <div class="mt-3">
            <a href="{{ route('clubs.create') }}" class="btn btn-primary">Crear otro Club</a>
            <a href="{{ url('/') }}" class="btn btn-secondary">Ir a Crear Liga</a>
        </div>
    </div>

</body>
</html>