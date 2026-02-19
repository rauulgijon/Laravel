<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Liga Maestre - Panel Principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card { transition: transform 0.3s; cursor: pointer; }
        .card:hover { transform: scale(1.05); box-shadow: 0 10px 20px rgba(0,0,0,0.2); }
        .icon { font-size: 3rem; margin-bottom: 10px; }
    </style>
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="text-center mb-5">
            <h1 class="fw-bold text-primary">Gestión Liga Maestre</h1>
            <p class="text-muted">Panel de administración de competiciones deportivas</p>
        </div>

        <div class="row g-4 justify-content-center">
            
            <div class="col-md-4 col-lg-3">
                <div class="card h-100 border-primary text-center p-3">
                    <div class="card-body">
                        <h3 class="card-title text-primary">Ligas</h3>
                        <p class="card-text">Gestionar competiciones y temporadas.</p>
                        <a href="{{ route('ligas.index') }}" class="btn btn-primary w-100">Ver Ligas</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-3">
                <div class="card h-100 border-success text-center p-3">
                    <div class="card-body">
                        <h3 class="card-title text-success">Clubes</h3>
                        <p class="card-text">Administrar equipos y categorías.</p>
                        <a href="{{ route('clubs.index') }}" class="btn btn-success w-100">Ver Clubes</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-3">
                <div class="card h-100 border-warning text-center p-3">
                    <div class="card-body">
                        <h3 class="card-title text-warning-emphasis">Jugadores</h3>
                        <p class="card-text">Plantillas, posiciones y dorsales.</p>
                        <a href="{{ route('jugadores.index') }}" class="btn btn-warning w-100">Ver Jugadores</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>
</html>