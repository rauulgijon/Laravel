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
            
            @error('nombre')
                <span style="color: red; font-size: 0.9em;">{{ $message }}</span>
            @enderror
        </div>
        <br>

        <div>
            <label for="poder">Poder Principal:</label><br>
            <input type="text" id="poder" name="poder" value="{{ old('poder') }}">
            
            @error('poder')
                <span style="color: red; font-size: 0.9em;">{{ $message }}</span>
            @enderror
        </div>
        <br>

        <div>
            <label for="nivel">Nivel de Poder (0-100):</label><br>
            <input type="number" id="nivel" name="nivel" value="{{ old('nivel') }}">
            
            @error('nivel')
                <span style="color: red; font-size: 0.9em;">{{ $message }}</span>
            @enderror
        </div>
        <br>

        <div>
            <label for="email">Correo de contacto:</label><br>
            <input type="email" id="email" name="email" value="{{ old('email') }}">
            
            @error('email')
                <span style="color: red; font-size: 0.9em;">{{ $message }}</span>
            @enderror
        </div>
        <br>

        <button type="submit">Registrar</button>

    </form>

</body>
</html>