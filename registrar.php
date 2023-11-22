<?php
if (
    empty($_POST["oculto"]) ||
    empty($_POST["vin"]) ||
    empty($_POST["cod_titulo"]) ||
    empty($_POST["transmicion"]) ||
    empty($_POST["costo"]) ||
    empty($_POST["modulo"]) ||
    empty($_POST["color"]) ||
    empty($_POST["serie"]) ||
    empty($_POST["descripcion"]) ||
    empty($_POST["no_cilindros"])
) {
    header('Location: index.php?mensaje=falta');
    exit();
}

include_once 'model/conexion.php';

$vin = $_POST["vin"];
$cod_titulo = $_POST["cod_titulo"];
$transmicion = $_POST["transmicion"];
$costo = $_POST["costo"];
$modulo = $_POST["modulo"];
$color = $_POST["color"];
$serie = $_POST["serie"];
$descripcion = $_POST["descripcion"];
$no_cilindros = $_POST["no_cilindros"];

$sentencia = $bd->prepare("INSERT INTO vehiculo(vin, cod_titulo, transmicion, costo, modulo, color, serie, descripcion, no_cilindros) VALUES (?,?,?,?,?,?,?,?,?);");
$resultado = $sentencia->execute([$vin, $cod_titulo, $transmicion, $costo, $modulo, $color, $serie, $descripcion, $no_cilindros]);

if ($resultado === true) {
    header('Location: index.php?mensaje=registrado');
} else {
    header('Location: index.php?mensaje=error');
    exit();
}
?>
