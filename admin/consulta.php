
<?php session_start();
require 'configToros.php';
require '../functionsToros.php';

$conexion = conexion($bd_config);

// Comprobamos si la session esta iniciada, sino, redirigimos.
comprobarSession();


if (!$conexion) {
    header("Location: ../error.php");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $RGI = $_POST['RGI'];
    $nombre = filter_var($_POST['Nombre'], FILTER_SANITIZE_STRING);
    $fecha_ingreso = $_POST['Ingreso'];

}

//$posts = obtener_post($blog_config['post_por_pagina'], $conexion);

require '../views/admin_consulta.view.php';
?>