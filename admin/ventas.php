<?php session_start();
require 'configToros.php';
require '../functionsToros.php';

$conexion = conexion($bd_config);

// Comprobamos si la session esta iniciada, sino, redirigimos.
comprobarSession();


if (!$conexion) {
	header('Location: ' . RUTA . '');
}

//$posts = obtener_post($blog_config['post_por_pagina'], $conexion);

require '../views/admin_ventas.view.php';
?>