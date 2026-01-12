<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Superhéroes</title>
</head>
<body>

    <h1>Registro de la Liga de Superhéroes</h1>

    @if (session('success'))
        <div style="color: green; border: 1px solid green; padding: 10px; margin-bottom: 15px;">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ url('/heroes') }}" method="POST">
        
        @csrf

        <div>
            <label for="nombre">Nombre de Superhéroe:</label><br>
            <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}">
        </div>
        <br>

        <div>
    <label for="poder">Poder Principal:</label><br>
    
    <select id="poder" name="poder">
        <option value="">Selecciona un poder</option>
        
        <option value="superfuerza" {{ old('poder') == 'superfuerza' ? 'selected' : '' }}>
            Superfuerza
        </option>
        
        <option value="vuelo" {{ old('poder') == 'vuelo' ? 'selected' : '' }}>
            Vuelo
        </option>
        
        <option value="invisibilidad" {{ old('poder') == 'invisibilidad' ? 'selected' : '' }}>
            Invisibilidad
        </option>
        
        <option value="rayos_laser" {{ old('poder') == 'rayos_laser' ? 'selected' : '' }}>
            Rayos Láser
        </option>
        
        <option value="regeneracion" {{ old('poder') == 'regeneracion' ? 'selected' : '' }}>
            Regeneración
        </option>
    </select>
</div>
        <br>

        <div>
            <label for="nivel">Nivel de Poder (0-100):</label><br>
            <input type="number" id="nivel" name="nivel" value="{{ old('nivel') }}">

        </div>
        <br>

        <div>
            <label for="email">Correo de contacto:</label><br>
            <input type="email" id="email" name="email" value="{{ old('email') }}">
        </div>
        <br>

        <button type="submit">Registrar</button>

    </form>

</body>
</html>