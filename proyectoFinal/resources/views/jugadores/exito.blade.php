<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Jugador Creado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <div class="alert alert-success border-warning">
        <h3 class="text-warning-emphasis">¡Jugador registrado!</h3>
        <ul>
            <li><strong>Nombre:</strong> {{ $jugador['nombre'] }}</li>
            <li><strong>Posición:</strong> {{ $jugador['posicion'] }}</li>
            <li><strong>Club:</strong> {{ $clubNombre }}</li>
        </ul>
        <div class="mt-3">
            <a href="{{ route('jugadores.create') }}" class="btn btn-warning">Crear otro</a>
            <a href="{{ route('menu') }}" class="btn btn-secondary">Volver al Menú</a>
        </div>
    </div>
</body>
</html>