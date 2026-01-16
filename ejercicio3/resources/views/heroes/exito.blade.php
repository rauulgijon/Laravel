<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Exitoso</title>
</head>
<body>
    <div class="success-message">
        <h2>¡Registro Exitoso!</h2>
        <p>El superhéroe <strong>{{ $heroe['nombre'] }}</strong> ha sido registrado correctamente.</p>
        <ul>
            <li><strong>Poder Principal:</strong> {{ $heroe['poder'] }}</li>
            <li><strong>Nivel de Poder:</strong> {{ $heroe['nivel'] }}</li>
            @if(!empty($heroe['email']))
                <li><strong>Correo de Contacto:</strong> {{ $heroe['email'] }}</li>
            @endif
        </ul>
        <a href="/superHeroes/registro">Registrar otro superhéroe</a>
    </div>
</body>
</html>