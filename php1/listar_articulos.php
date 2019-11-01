<?php
require_once '../db/conexion.php';
$salida = "";

$account = DB::query("SELECT * FROM articulos where estado <> 'eliminado'");

foreach ($account as $username) {
$salida .= "<tr>                                      
<td width='5%'>".$username['id']."</td>
<td width='10%'><p class='text-justify'>".$username['estado']."</p></td>
<td>".$username['comentarios']."</td>
<td>";

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
