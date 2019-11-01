<?php
require_once '../db/conexion.php';
$id=$_POST['id'];

DB::update('articulos', array(
    'estado' => 'eliminado',
    'fecha_eliminacion'=> new DateTime("now")
  ), "id=%s", $id); 
?>