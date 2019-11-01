<?php
require_once '../db/conexion.php';
$id= $_POST['id'];
$estado= $_POST['name'];

$codigo=$_POST['codigo'];

DB::update('articulos', array(
    'estado' => $estado,
    'comentarios' => $codigo,
    'fecha_actualizacion' => new DateTime("now")
  ), "id=%s", $id); 
  echo "<script>alert('hecho');  </script>";
  
?>

