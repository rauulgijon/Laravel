<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2>Registro de Héroes</h2>
            
            <form method="POST" action="{{ route('heroes.store') }}">
                @csrf
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
                
                <br>
                
                <label for="poder" class="form-label">Poder:</label>
                <input type="text" class="form-control" id="poder" name="poder" required>
            
                <br>
            
                <label for="nivel" class="form-label">Nivel:</label>
                <input type="number" class="form-control" id="nivel" name="nivel" required>

                <br>

                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" >
                <br>
                <button type="submit" class="btn btn-primary">Registrar Héroe</button>
                
            </form>
        </div>
    </div>
</div>  