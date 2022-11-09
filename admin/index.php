<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de artículos</title>
</head>
<body>
    <?php
    require '../comunes/auxiliar.php';
    require 'comunes/auxiliar.php';
    $pdo = conectar();
    $sent = $pdo->query("SELECT * FROM articulos ORDER BY codigo");

    if (isset($_SESSION['mensaje'])) {
        echo $_SESSION['mensaje'];
        unset($_SESSION['mensaje']);
    }
    ?>

    <div>Listado de artículos</div>

    <table border="1">
        <thead>
            <th>Código</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            <?php foreach ($sent as $fila): ?>
                <tr>
                    <td><?= hh($fila['codigo']) ?></td>
                    <td><?= hh($fila['descripcion']) ?></td>
                    <td><?= hh($fila['precio']) ?></td>
                    <td><a href="confirmar_borrado.php?id=<?= $fila['id'] ?>">Borrar</a></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <a href="insertar.php">Insertar un nuevo articulo</a>
</body>
</html>
