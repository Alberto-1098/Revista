<?php
require_once '../db/conexion.php';
$salida = "";

$account = DB::query("SELECT * FROM idiomas");

foreach ($account as $username) {
$salida .= " <option value=".$username['id'].">".$username['nombre']."</option>";
  }

 echo($salida);
?>
