<?php include 'template/header.php' ?>

<?php
if(!isset($_GET['id_vehiculo'])){
    header('Location: index.php?mensaje=error');
    exit();
}

include_once 'model/conexion.php';
$id_vehiculo = $_GET['id_vehiculo'];

$sentencia = $bd->prepare("SELECT * FROM vehiculo WHERE id_vehiculo = ?;");
$sentencia->execute([$id_vehiculo]);
$vehiculo = $sentencia->fetch(PDO::FETCH_OBJ);
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Editar datos:
                </div>
                <form class="p-4" method="POST" action="editarProceso.php">
                    <div class="mb-3">
                        <label class="form-label">VIN: </label>
                        <input type="text" class="form-control" name="txtVIN" autofocus required
                        value="<?php echo $vehiculo->vin; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Código de Título: </label>
                        <input type="text" class="form-control" name="txtCodTitulo" autofocus required
                        value="<?php echo $vehiculo->cod_titulo; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Transmisión: </label>
                        <input type="text" class="form-control" name="txtTransmicion" autofocus required
                        value="<?php echo $vehiculo->transmicion; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Costo: </label>
                        <input type="text" class="form-control" name="txtCosto" autofocus required
                        value="<?php echo $vehiculo->costo; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Módulo: </label>
                        <input type="text" class="form-control" name="txtModulo" autofocus required
                        value="<?php echo $vehiculo->modulo; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Color: </label>
                        <input type="text" class="form-control" name="txtColor" autofocus required
                        value="<?php echo $vehiculo->color; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Serie: </label>
                        <input type="text" class="form-control" name="txtSerie" autofocus required
                        value="<?php echo $vehiculo->serie; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Descripción: </label>
                        <input type="text" class="form-control" name="txtDescripcion" autofocus required
                        value="<?php echo $vehiculo->descripcion; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">No. de Cilindros: </label>
                        <input type="text" class="form-control" name="txtNoCilindros" autofocus required
                        value="<?php echo $vehiculo->no_cilindros; ?>">
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="oculto" value="1">
                        <input type="hidden" name="id_vehiculo" value="<?php echo $vehiculo->id_vehiculo; ?>">
                        <input type="submit" class="btn btn-primary" value="Guardar cambios">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'template/footer.php' ?>
