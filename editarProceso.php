<?php
print_r($_POST);

if(!isset($_POST['id_vehiculo'])){
    header('Location: index.php?mensaje=error');
}

include 'model/conexion.php';

$id_vehiculo = $_POST['id_vehiculo'];
$vin = $_POST['txtVIN'];
$cod_titulo = $_POST['txtCodTitulo'];
$transmicion = $_POST['txtTransmicion'];
$costo = $_POST['txtCosto'];
$modulo = $_POST['txtModulo'];
$color = $_POST['txtColor'];
$serie = $_POST['txtSerie'];
$descripcion = $_POST['txtDescripcion'];
$no_cilindros = $_POST['txtNoCilindros'];

$sentencia = $bd->prepare("UPDATE vehiculo SET vin = ?, cod_titulo = ?, transmicion = ?, costo = ?, modulo = ?, color = ?, serie = ?, descripcion = ?, no_cilindros = ? WHERE id_vehiculo = ?;");
$resultado = $sentencia->execute([$vin, $cod_titulo, $transmicion, $costo, $modulo, $color, $serie, $descripcion, $no_cilindros, $id_vehiculo]);

if ($resultado === TRUE) {
    header('Location: index.php?mensaje=editado');
} else {
    header('Location: index.php?mensaje=error');
    exit();
}
?>
