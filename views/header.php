<!DOCTYPE html>
<html lang="en">

<head>
	<!--========BOOTSTRAP CSS ==================================================================-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Toros</title>
	<link rel="stylesheet" href="<?php echo RUTA; ?>/css/estilos.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<!--=======SCRIPT DE BOOTSTRAP=============================================================-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
	
	

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


	<!--<link rel="shortcut icon" href="/favicon.ico" />   CAMBIAR EL ICONO DEL NAVEGADOR-->
</head>

<body>
	<header>
		<nav class="navbar navbar-expand-lg dark">
			<a class="navbar-brand fuenteGoogle Blanco" href="">
				<img src="img/TorosLogo.jpeg" class="rounded-circle chico" alt="">
				Toros</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>


			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">


					<li class="nav-item active Blanco">
						<a class="nav-link Blanco" href="<?php echo RUTA; ?>">Inicio <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item active">
						<a class="nav-link Blanco" href="<?php echo RUTA; ?>/login.php">Administración</a>
					</li>
					<!--
					<form #CerrandoData="ngForm" (ngSubmit)="saliendo(CerrandoData)">
						<li *ngIf="sesion == 1" class="nav-item">

							<button class="btn btn-dark">Cerrar Sesion</button>

						</li>
					</form> -->



				</ul>

			</div>
		</nav>











		<!--<div class="contenedor">
			<div class="logo izquierda">
				<p><a href="<?php echo RUTA; ?>">INICIO</a></p>
			</div>

			<div class="derecha">

				<nav class="menu">
					<ul>
						<li>
							<a href="#"><i class="fa fa-twitter"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-facebook"></i></a>
						</li>
						<li><a href="<?php echo RUTA; ?>/login.php">Iniciar Sesion<i class="icono fa fa-lock"></i></a></li>
						<li><a href="<?php echo RUTA; ?>/admin/registrate.php">Registro<i class="icono fa fa-lock"></i></a></li>
					</ul>
				</nav>
			</div>

		</div>-->
	</header>