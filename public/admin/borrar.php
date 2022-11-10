<?php
session_start();

require 'comunes/auxiliar.php';
require '../comunes/auxiliar.php';

$id = obtener_post('id');

#TODO: comprobar csrf

if (!isset($id)) {
    return volver_admin();
}

#TODO: Validar id

$pdo = conectar();
$sent = $pdo->prepare("DELETE FROM articulos WHERE id = :id");
$sent->execute([':id' => $id]);
$_SESSION['mensaje'] = 'El articulo se ha borrado correctamente';
volver_admin();
