<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmar borrado</title>
</head>
<body>
    <?php
    require 'comunes/auxiliar.php';
    require '../comunes/auxiliar.php';

    $id = obtener_get('id');

    if (!isset($id)) {
        return volver_admin();
    }

    #cabecera();
    ?>
    <p>¿Está seguro de que desea borrar ese articulo?</p>
    <form action="borrar.php" method="post">
        <input type="hidden" name="id" value="<?= $id ?>">
        <button type="submit">Sí</button>
        <a href="/admin/index.php">No</a>
    </form>
</body>
</html>
