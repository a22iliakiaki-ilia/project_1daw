<?php include_once "header.php"; ?>

<?php
$mysqli = include_once "conexion.php";
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$sentencia = $mysqli->prepare("INSERT INTO videojuegos
(nombre, descripcion)
VALUES
(?, ?)");
$sentencia->bind_param("ss", $nombre, $descripcion);
$sentencia->execute();
header("Location: mostrar.php");?>
<div class="row">
    <div class="col-12">
        <h1>Registrar videojuego</h1>
        <form action="registrar.php" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input placeholder="Nombre" class="form-control" type="text" name="nombre" id="nombre" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea placeholder="Descripción" class="form-control" name="descripcion" id="descripcion" cols="30" rows="10" required></textarea>
            </div>
            <div class="form-group"><button class="btn btn-success">Guardar</button></div>
        </form>
    </div>
</div>
<?php include_once "footer.php"; ?>
