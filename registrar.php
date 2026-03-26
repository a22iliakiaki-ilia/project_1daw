
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
$id = $mysqli->insert_id; 

header("Location: ticket.php?id=" . $id);
exit;
?>

