<?php
require_once '../db/conexion.php';
$salida = "";
$account = DB::query("SELECT * FROM idiomas");

foreach ($account as $username) {
$salida .= "
<tr class='text-center'>                                      
<td width='5%'>".$username['id']."</td>
<td width='10%'>".$username['nombre']."</td>
<td width='3%'>";

$salida .="
  <button type='button' data-dismiss='modal' id='Agregar' class='btn btn-primary rounded-circle' >
  <i class='fas fa-plus'></i>
  </button>

</td>
</tr>";
  }
 

 echo($salida);
?>
