<?php require 'header.php' ?>
<!--
<!DOCTYPE html>
<html lang="es">
<div class="degradado">
	<div class="login Center">
		<div class="post">
			<article>
				<h2 class="titulo">Inicia Sesion</h2>
				<form  class="formulario" method="post">
					<input class="margen" type="text" name="usuario" placeholder="Usuario">
					<input class="margen" type="password" name="password" placeholder="Contraseña">
					<input class="margen" type="submit" value="Iniciar Sesion">
				</form>
			</article>
		</div>
	</div>
</div>
-->



<div class="main-section degradado">

    <div class="modal-dialog text-center">

        <div class="col-sm-g">
            <div class="modal-content transparente">
                <div class="col-12 user-img">
                    <img src="img/logoTaekwondo.png" class="rounded-circle chico" alt="" />
                </div>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="login">
                    <div class="form-group col-12">
                        <label class="bold-font" for="exampleInputEmail1">Usuario</label>
                        <input type="text" name="usuario" class="form-control text-center" placeholder="Nombre de Usuario">
                    </div>
                    <div class="form-group col-12">
                        <label class="bold-font" for="exampleInputPassword1">Contraseña</label>
                        <input type="password" name="password" class="form-control text-center" placeholder="Contraseña">
                    </div>

                    <button class="btn btn-primary" type="submit" onclick="login.submit()">Ingresar</button>
                </form>

            </div>
        </div>

    </div>

</div>

<?php require 'footer.php'; ?>