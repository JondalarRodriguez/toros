<?php require 'admin_header.php' ?>
<!DOCTYPE html>
<html lang="en">

<body>



    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="margen"> Crédito</h1>
            </div>

            <div class="col order-1">
                <div class="input-group mb-3">
                    <h3>Total</h3>
                    <input type="text" class="form-control" id="Total" aria-label="First name">
                </div>
            </div>
        </div>
    </div>





    <div class="container">
        <div class="d-grid gap-1">
            <button class="btn btn-danger">Clientes</button>
        </div>
        <table class="table table-hover table-bordered border">

            <thead>
                <tr>
                    <th scope="col">RGI</th>
                    <th scope="col">Nombre</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                </tr>
            </tbody>
        </table>
    </div>


    <div class="container">
        <div class="row">
            <div class="col">
                <div class="input-group mb-3">
                    <h3>Abonar</h3>
                    <input type="text" class="form-control" id="Abono" aria-label="First name">
                </div>
            </div>

            <div class="col order-1">
                <button class="btn btn-danger">Abonar</button>
                <button class="btn btn-danger" onclick="location.href='<?php echo RUTA; ?>/admin/consulta.php'">Cancelar</button>
            </div>
        </div>
    </div>



</body>
<?php require '../views/footer.php'; ?>