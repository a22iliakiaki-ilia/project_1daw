<?php
$host = "localhost";
$usuario = "a22iliakiaki_motos";
$contrasenia = "Ilya2006.";
$base_de_datos = "a22iliakiaki_motos";
$mysqli = new mysqli($host, $usuario, $contrasenia, $base_de_datos);
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
return $mysqli;