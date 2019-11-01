<?php
require_once '../db/conexion.php';

$titulo = $_POST['titulo'];
$option =$_POST['option'];
$descripcion =$_POST['descripcion'];
$texto =$_POST['texto'];
$id =$_POST['id'];

DB::insert('traduccion', array(
    'estado' => 0,
    'titulo' => $titulo,
    'descripcion_corta' =>$descripcion,
    'texto_articulo' =>$texto,
    'id_idiomas' => $option,
    'fecha_creacion' => new DateTime("now")
  ));
return "hecho";
  
?>
