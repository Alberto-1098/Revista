<?php
session_start();
$_SESSION['id'];
require_once './db/conexion.php';
$estado= $_POST['name'];
$codigo=$_POST['codigo'];
$nombre=$_POST['nombre'];
DB::insert('idiomas', array(
    'esta' => $estado,
    'codigo' => $codigo,
    'nombre' => $nombre,
    'fecha_creacion' => new DateTime("now")
  ));
  
  
?>
