<?php
$mysqli = include_once "conexion.php";

if (!isset($_GET["id"])) {
    exit("ID no proporcionado");
}

$id = $_GET["id"];
$sentencia = $mysqli->prepare("SELECT id, nombre, descripcion, tipo FROM videojuegos WHERE id = ?");
$sentencia->bind_param("i", $id);
$sentencia->execute();
$resultado = $sentencia->get_result();
$videojuego = $resultado->fetch_assoc();

if (!$videojuego) {
    exit("No hay resultados para ese ID");
}

include_once "header.php"; 
?>

<div class="container mt-5 text-center">
    <div class="card shadow p-5">
        <h1 class="text-success">Registro Exitoso!</h1>
        <p class="lead">Tu juego ha sido registrado con el <strong>ID: <?php echo $videojuego["id"] ?></strong></p>
        
        <div class="my-4">
            <i class="bi bi-check-circle-fill text-success" style="font-size: 5rem;"></i>
        </div>

        <ul class="list-group list-group-flush text-start mb-4">
            <li class="list-group-item"><strong>Nombre:</strong> <?php echo htmlspecialchars($videojuego["nombre"]) ?></li>
            <li class="list-group-item"><strong>Descripción:</strong> <?php echo htmlspecialchars($videojuego["descripcion"]) ?></li>
            <li class="list-group-item"><strong>Descripción:</strong> <?php echo htmlspecialchars($videojuego["tipo"]) ?></li>
        </ul>

        <div class="d-grid gap-2 d-md-block">
            <a href="mostrar.php" class="btn btn-primary">Ver inventario</a>
            <a href="insertar.php" class="btn btn-outline-secondary">Registrar otro</a>
        </div>
    </div>
</div>

<?php include_once "footer.php"; ?>