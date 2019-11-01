<?php
require_once '../db/conexion.php';
$estado= $_POST['name'];
$codigo=$_POST['codigo'];

DB::insert('articulos', array(
    'estado' => $estado,
    'comentarios' => $codigo,
    'fecha_creacion' => new DateTime("now")
  ));
  echo ("dato guardado");
  
?>
