<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Éxito</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <div class="alert alert-success">
        <h3>¡Liga registrada correctamente!</h3>
        <ul>
            <li><strong>Nombre:</strong> {{ $liga['nombre'] }}</li>
            <li><strong>Deporte:</strong> {{ $liga['deporte'] }}</li>
            <li><strong>Temporada:</strong> {{ $liga['temporada'] }}</li>
        </ul>
        
        <a href="{{ route('ligas.create') }}" class="btn btn-secondary">Volver al formulario</a>
    </div>

</body>
</html>