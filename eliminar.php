<?php
if (!isset($_GET['id_vehiculo'])) {
    header('Location: index.php?mensaje=error');
    exit();
}

include 'model/conexion.php';
$id_vehiculo = $_GET['id_vehiculo'];

$sentencia = $bd->prepare("DELETE FROM vehiculo WHERE id_vehiculo = ?;");
$resultado = $sentencia->execute([$id_vehiculo]);

if ($resultado === TRUE) {
    header('Location: index.php?mensaje=eliminado');
} else {
    header('Location: index.php?mensaje=error');
}
?>