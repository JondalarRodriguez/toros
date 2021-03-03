<?php require 'admin_header.php' ?>
<!DOCTYPE html>
<html lang="en">


<body background="../img/FondoClientes.jpg">

	<!-- Button trigger modal -->
	<button type="button" class="btn btn-danger CenterButton margen" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
		Añadir
	</button>


	<!-- Modal -->
	<Form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="añadirCliente">
		<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Añadir Cliente</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>

					<div class="modal-body ">
						Datos del cliente
						<div class="input-group mb-3">
							<span class="input-group-text ancho letrasBlancas contenedor" name="RGI">RGI</span>
							<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
						</div>
						<div class="input-group mb-3">
							<span class="input-group-text ancho letrasBlancas contenedor" name="Nombre">Nombre</span>
							<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
						</div>
						<div class="input-group mb-3">
							<span class="input-group-text ancho letrasBlancas contenedor" name="Ingreso">Fecha de Ingreso</span>
							<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
						</div>
						<div class="input-group mb-3">
							<span class="input-group-text ancho letrasBlancas contenedor" name="Direccion">Dirección</span>
							<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
						</div>
						<div class="input-group mb-3">
							<span class="input-group-text ancho letrasBlancas contenedor" name="Telefono">Teléfono</span>
							<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
						</div>
						<div class="input-group mb-3">
							<span class="input-group-text ancho letrasBlancas contenedor" name="Edad">Edad</span>
							<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
						</div>
						<div class="input-group mb-3">
							<span class="input-group-text ancho letrasBlancas contenedor" name="Horario">Horario</span>
							<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
						</div>
						<div class="input-group mb-3">
							<span class="input-group-text ancho letrasBlancas contenedor" name="Clase">Clase</span>
							<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
						</div>
						<div class="input-group mb-3">
							<span class="input-group-text ancho letrasBlancas contenedor" name="Mensualidad">Mensualidad</span>
							<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
						</div>


					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
						<button type="submit" onclick="añadirCliente.submit()" class="btn btn-primary">Guardar</button>
					</div>

				</div>
			</div>
		</div>
	</Form>


	<div class="input-group mb-3">
		Buscar
		<input type="text" class="form-control" id="Busqueda" placeholder="Busqueda" aria-label="First name">
		<button type="button" class="btn btn-danger"> Buscar </button>
	</div>




	<div class="card mb-12 transparente">
		<div class="row g-0 opaco">
			<div class="col-md-6 row">
				<div class="container opaco">
					<table class="table">
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
					</table>
				</div>
			</div>
			<div class="col-md-6">
				<div class="contenedor opaco">
					<p class="Center letrasBlancas">Detalles de clientes</p>
					<div class="input-group mb-3">
						<span class="input-group-text ancho letrasBlancas contenedor" id="Folio">Folio</span>
						<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
					</div>
					<div class="input-group mb-3">
						<span class="input-group-text ancho letrasBlancas contenedor" id="RGI">RGI</span>
						<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
					</div>
					<div class="input-group mb-3">
						<span class="input-group-text ancho letrasBlancas contenedor" id="Nombre">Nombre</span>
						<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
					</div>
					<div class="input-group mb-3">
						<span class="input-group-text ancho letrasBlancas contenedor" id="Ingreso">Fecha de Ingreso</span>
						<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
					</div>
					<div class="input-group mb-3">
						<span class="input-group-text ancho letrasBlancas contenedor" id="Direccion">Dirección</span>
						<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
					</div>
					<div class="input-group mb-3">
						<span class="input-group-text ancho letrasBlancas contenedor" id="Telefono">Teléfono</span>
						<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
					</div>
					<div class="input-group mb-3">
						<span class="input-group-text ancho letrasBlancas contenedor" id="Edad">Edad</span>
						<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
					</div>
					<div class="input-group mb-3">
						<span class="input-group-text ancho letrasBlancas contenedor" id="Horario">Horario</span>
						<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
					</div>
					<div class="input-group mb-3">
						<span class="input-group-text ancho letrasBlancas contenedor" id="Clase">Clase</span>
						<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
					</div>
					<div class="input-group mb-3">
						<span class="input-group-text ancho letrasBlancas contenedor" id="Mensualidad">Mensualidad</span>
						<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
					</div>


				</div>
				<div class="d-grid gap-4 d-md-block Center">
					<button class="btn btn-danger redondo separacion" onclick="location.href='<?php echo RUTA; ?>/admin/credito.php'" type="button">Crédito</button>

					<button class="btn btn-danger redondo separacion" type="button">Eliminar</button>
					<button class="btn btn-danger redondo separacion" type="button">Guardar</button>
				</div>
			</div>
		</div>
	</div>

</body>

<?php require '../views/footer.php'; ?>