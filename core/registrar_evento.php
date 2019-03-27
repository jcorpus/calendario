<?php 

require('conexion.php');
  $db = new Conexion();
  $sql = $db->query("SELECT * FROM eventos");


  if ($db->rows($sql) > 0) {
  	$usuario_rol = $db->recorrer($sql);
  		print_r($usuario_rol);
  }
  $db->liberar($sql);
  $db->close();
  return $usuario_rol;

 ?>