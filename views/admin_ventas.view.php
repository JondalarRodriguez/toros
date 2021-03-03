<?php require 'admin_header.php' ?>
<!DOCTYPE html>
<html lang="en">

<body>

    <div class="container">
        <div class="row">
            <div class="col order-1">
                <button class="btn btn-danger">Añadir</button>
                <button class="btn btn-danger" onclick="location.href='<?php echo RUTA; ?>/admin/consulta.php'">Editar</button>
                <button class="btn btn-danger">Eliminar</button>
            </div>
            <div class="col">
                <div class="input-group mb-3">
                    <h3>Buscar</h3>
                    <input type="text" class="form-control" id="BuscarProducto" aria-label="First name">
                </div>
            </div>


        </div>
    </div>


    <div class="container">
        <div class="d-grid gap-1">
            <button class="btn btn-danger">Productos</button>
        </div>
        <table class="table table-hover table-bordered border">

            <thead>
                <tr>
                    <th scope="col">Folio</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Costo</th>
                    <th scope="col">Precio Venta</th>
                    <th scope="col">Existencia</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Peto Rojo</td>
                    <td>600</td>
                    <td>900</td>
                    <td>3</td>
                </tr>
            </tbody>
        </table>
    </div>


</body>

<?php require '../views/footer.php'; ?>