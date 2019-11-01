<?php

require_once '../db/conexion.php';

$salida = "";

$account = DB::query("SELECT * FROM traduccion ");

foreach ($account as $username) {
$salida .= "<tr class='text-center'>                                      
<td width='5%' style='display:none;'>".$username['id']."</td>
<td width='5%' style='display:none;'>".$username['estado']."</td>
<td width='5%'>".$username['titulo']."</td>
<td width='10%'>".$username['descripcion_corta']."</td>
<td width='10%'>".$username['texto_articulo']."</td>

<td width='3%'>";

$salida .="
<button type='button' id='actualizar' class='btn btn-success btn-sm rounded-circle' data-toggle='modal' data-target='#exampleModalScrollable'>
<i class='far fa-edit'></i>
  </button>
  <button type='button' id='eliminar' class='btn btn-danger btn-sm rounded-circle' data-toggle='modal' data-target='#exampleModalScrollable2' >
<i class='fas fa-trash'></i>
  </button>
  <button type='button' id='traducir' class='btn btn-primary btn-sm rounded-circle' data-toggle='modal' data-target='#exampleModalScrollable3' >
  <i class='fas fa-globe'></i>
    </button>
</td>
</tr>
";
  }

 echo($salida);
?>
