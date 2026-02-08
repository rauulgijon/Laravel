<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Partido Creado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <div class="alert alert-success border-danger">
        <h3 class="text-danger">¡Partido registrado!</h3>
        <p>El partido se ha guardado correctamente en la base de datos.</p>
        <div class="mt-3">
            <a href="{{ route('partidos.create') }}" class="btn btn-danger">Crear otro</a>
            <a href="{{ route('menu') }}" class="btn btn-secondary">Volver al Menú</a>
        </div>
    </div>
</body>
</html>