<?php include_once "header.php"; ?>

<div class="container mt-4">
    <div class="row">
        <div class="col-12 col-md-8 offset-md-2">
            <h1 class="mb-4">Registrar videojuego</h1>
            <form action="registrar.php" method="POST" class="card p-4 shadow-sm">
                <div class="mb-3">
                    <label for="nombre" class="form-label fw-bold">Nombre</label>
                    <input placeholder="Ej. The Witcher 3" class="form-control" type="text" name="nombre" id="nombre" required>
                </div>
                <div class="mb-3">
                    <label for="descripcion" class="form-label fw-bold">Descripción</label>
                    <textarea placeholder="Añade una descripción..." class="form-control" name="descripcion" id="descripcion" rows="3" required></textarea>
                </div>
                <div class="mb-4">
                    <label for="tipos" class="form-label fw-bold">Tipo</label>
                    <select class="form-select" name="tipo" id="tipos" required>
                        <option value="" disabled selected>Selecciona una categoría</option>
                        <option value="role">Role</option>
                        <option value="sport">Sport</option>
                        <option value="fight">Fight</option>
                    </select>
                </div>
                <div class="mb-2">
                    <button type="submit" class="btn btn-success w-100">
                        <i class="bi bi-save"></i> Guardar Videojuego
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include_once "footer.php"; ?>
