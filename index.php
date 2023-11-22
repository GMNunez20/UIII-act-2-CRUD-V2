<?php include 'template/header.php' ?>

<?php
include_once "model/conexion.php";
$sentencia = $bd->query("SELECT * FROM vehiculo");
$vehiculos = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

<div class="container mt-5 mb-5">
    <div class="card">
        <div class="card-header">
            Lista de vehículos
        </div>
        <div class="p-4">
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">VIN</th>
                        <th scope="col">Código de Título</th>
                        <th scope="col">Transmisión</th>
                        <th scope="col">Costo</th>
                        <th scope="col">Módulo</th>
                        <th scope="col">Color</th>
                        <th scope="col">Serie</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">No. de Cilindros</th>
                        <th scope="col" colspan="2">Opciones</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    foreach ($vehiculos as $vehiculo) {
                        ?>

                        <tr>
                            <td scope="row">
                                <?php echo $vehiculo->id_vehiculo; ?>
                            </td>
                            <td>
                                <?php echo $vehiculo->vin; ?>
                            </td>
                            <td>
                                <?php echo $vehiculo->cod_titulo; ?>
                            </td>
                            <td>
                                <?php echo $vehiculo->transmicion; ?>
                            </td>
                            <td>
                                <?php echo $vehiculo->costo; ?>
                            </td>
                            <td>
                                <?php echo $vehiculo->modulo; ?>
                            </td>
                            <td>
                                <?php echo $vehiculo->color; ?>
                            </td>
                            <td>
                                <?php echo $vehiculo->serie; ?>
                            </td>
                            <td>
                                <?php echo $vehiculo->descripcion; ?>
                            </td>
                            <td>
                                <?php echo $vehiculo->no_cilindros; ?>
                            </td>
                            <td><a class="text-success"
                                    href="editar.php?id_vehiculo=<?php echo $vehiculo->id_vehiculo; ?>"><i
                                        class="bi bi-pencil-square"></i></a></td>
                            <td><a onclick="return confirm('Estás seguro de eliminar?');" class="text-danger"
                                    href="eliminar.php?id_vehiculo=<?php echo $vehiculo->id_vehiculo; ?>"><i
                                        class="bi bi-trash"></i></a></td>
                        </tr>

                        <?php
                    }
                    ?>

                </tbody>
            </table>

        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                Ingresar datos:
            </div>
            <form class="p-4" method="POST" action="registrar.php">
                <div class="mb-3">
                    <label class="form-label">VIN: </label>
                    <input type="text" class="form-control" name="vin" autofocus required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Código de Título: </label>
                    <input type="text" class="form-control" name="cod_titulo" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Transmisión: </label>
                    <input type="text" class="form-control" name="transmicion" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Costo: </label>
                    <input type="text" class="form-control" name="costo" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Módulo: </label>
                    <input type="text" class="form-control" name="modulo" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Color: </label>
                    <input type="text" class="form-control" name="color" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Serie: </label>
                    <input type="text" class="form-control" name="serie" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Descripción: </label>
                    <input type="text" class="form-control" name="descripcion" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">No. de Cilindros: </label>
                    <input type="text" class="form-control" name="no_cilindros" required>
                </div>
                <div class="d-grid">
                    <input type="hidden" name="oculto" value="1">
                    <input type="submit" class="btn btn-primary" value="Registrar">
                </div>
            </form>

        </div>
    </div>
</div>

<?php include 'template/footer.php' ?>
