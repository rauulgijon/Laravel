<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Club</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <div class="card shadow">
        <div class="card-header bg-success text-white">
            <h3 class="mb-0">Nuevo Club</h3>
        </div>
        <div class="card-body">
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

                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ route('menu') }}" class="btn btn-secondary">⬅ Volver al Menú</a>
                    <button type="submit" class="btn btn-success">Registrar Club</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>