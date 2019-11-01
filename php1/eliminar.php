<?php
require_once '../db/conexion.php';
$id=$_POST['id'];
echo ($id);
DB::update('idiomas', array(
    'esta' => 0,
    'fecha_eliminacion'=> new DateTime("now")
  ), "id=%s", $id); 
  
?>