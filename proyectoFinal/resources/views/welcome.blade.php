<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Liga Maestre - Panel Principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card:hover { transform: scale(1.05); transition: 0.3s; box-shadow: 0 10px 20px rgba(0,0,0,0.2); }
        .card { cursor: pointer; transition: 0.3s; }
    </style>
</head>
<body class="bg-light">

    <div class="container mt-5">
        <h1 class="text-center mb-5 fw-bold text-primary">🏆 Gestión Liga Maestre</h1>

        <div class="row g-4 justify-content-center">
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-primary">
                    <div class="card-body text-center">
                        <h3 class="card-title text-primary">⚽ Ligas</h3>
                        <p class="card-text">Crear y gestionar competiciones.</p>
                        <a href="{{ route('ligas.create') }}" class="btn btn-primary w-100">Gestionar Ligas</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-success">
                    <div class="card-body text-center">
                        <h3 class="card-title text-success">🛡️ Clubes</h3>
                        <p class="card-text">Administrar los equipos.</p>
                        <a href="{{ route('clubs.create') }}" class="btn btn-success w-100">Gestionar Clubes</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-warning">
                    <div class="card-body text-center">
                        <h3 class="card-title text-warning-emphasis">🏃‍♂️ Jugadores</h3>
                        <p class="card-text">Gestionar plantillas.</p>
                        <a href="{{ route('jugadores.create') }}" class="btn btn-warning w-100">Gestionar Jugadores</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-danger">
                    <div class="card-body text-center">
                        <h3 class="card-title text-danger">🆚 Partidos</h3>
                        <p class="card-text">Resultados y calendario.</p>
                        <a href="{{ route('partidos.create') }}" class="btn btn-danger w-100">Gestionar Partidos</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>
</html>