<?php session_start();
require 'admin/configToros.php';
require 'functionsToros.php';




if (isset($_SESSION['usuario'])) {
  header('Location: ' . RUTA . '/admin/consulta.php');
}
$errores = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $usuario = limpiarDatos($_POST['usuario']);
  $password = limpiarDatos($_POST['password']);
  //$password = hash('sha512', $password);

  
  
  try {
    $conexion = new PDO('mysql:host=localhost;dbname=' . $bd_config['basedatos'], $bd_config['usuario'], $bd_config['pass']);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
  } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();;
  }

  $statement = $conexion->prepare(
    '
        SELECT * FROM Usuarios WHERE usuario = :usuario AND contraseña = :password'
  );

  $statement->execute(array(
    ':usuario' => $usuario,
    ':password' => $password
  ));

  $resultado = $statement->fetch();
  var_dump($resultado);
  if ($resultado !== false) {
    $_SESSION['usuario'] = $usuario;
    header('Location: ' . RUTA . '/admin/consulta.php');
  } else {
    $errores .= '<li>Datos Incorrectos</li>';
  }
}


require 'views/login.view.php';
