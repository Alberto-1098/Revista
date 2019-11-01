<?php

require_once '../db/conexion.php';

$salida = "";

$account = DB::query("SELECT * FROM idiomas where esta <> 0 ");

foreach ($account as $username) {
$salida .= "<tr class='text-center'>                                      
<td width='5%'>".$username['id']."</td>
<td width='5%'>".$username['esta']."</td>
<td width='5%'>".$username['codigo']."</td>
<td width='10%'>".$username['nombre']."</td>
<td width='3%'>";

$salida .="
<button type='button' id='actualizar' class='btn btn-success rounded-circle' data-toggle='modal' data-target='#exampleModalScrollable'>
<i class='far fa-edit'></i>
  </button>
  <button type='button' id='eliminar' class='btn btn-danger rounded-circle' data-toggle='modal' data-target='#exampleModalScrollable2' >
<i class='fas fa-trash'></i>
  </button>

</td>
</tr>";
  }

 echo($salida);
?>
