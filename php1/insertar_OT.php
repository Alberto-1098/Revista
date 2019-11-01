<?php
require_once '../db/conexion.php';

$option =$_POST['option'];
$texto =$_POST['texto'];
$id =$_POST['id'];

DB::insert('traduccion_articulo', array(
    'traduccion' =>$texto,
    'id_idioma' => $option,
    'id_trad' =>$id
  ));

  echo ("Traduccion exitosa");
  
?>
