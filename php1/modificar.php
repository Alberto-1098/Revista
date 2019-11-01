<?php
require_once '../db/conexion.php';
$id= $_POST['id'];

 var_dump($_POST);

$estado= $_POST['name'];
echo ($estado);
$codigo=$_POST['codigo'];
$nombre=$_POST['nombre'];
echo ($nombre);

DB::update('idiomas', array(
    'esta' => $estado,
    'codigo' => $codigo,
    'nombre' => $nombre,
    'fecha_actualizacion' => new DateTime("now")
  ), "id=%s", $id); 
 
  
?>

