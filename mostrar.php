<?php include_once "header.php"; ?>
<?php
$mysqli = include_once "conexion.php";
$resultado = $mysqli->query("SELECT id, nombre, descripcion, tipo FROM videojuegos");
$videojuegos = $resultado->fetch_all(MYSQLI_ASSOC);?>
<table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Tipo</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($videojuegos as $videojuego) { ?>
                    <tr>
                        <td><?php echo $videojuego["id"] ?></td>
                        <td><?php echo $videojuego["nombre"] ?></td>
                        <td><?php echo $videojuego["descripcion"] ?></td>
                        <td>
                            <?php 
                                $color = "black";
                                $tipo_valor = $videojuego["tipo"];

                                switch ($tipo_valor) {
                                    case 'role':
                                        $color = "blue";
                                        break;
                                    case 'sport':
                                        $color = "yellow";
                                        break;
                                    case 'action': 
                                        $color = "green";
                                        break;
                                }
                                ?>
                                <p style="color: <?php echo $color; ?>; font-weight: bold;">
                                    <?php echo $tipo_valor; ?>
                                </p>
                        </td>
                        <td>
                            <a href="update.php?id=<?php echo $videojuego["id"] ?>">Editar</a>
                        </td>
                        <td>
                            <a href="delete.php?id=<?php echo $videojuego["id"] ?>">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
<?php include_once "footer.php"; ?>
