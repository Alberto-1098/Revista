<?php

require_once '../db/conexion.php';
session_start();
$id =$_POST['id'];
$_SESSION['id']=$id;

$valor= $_SESSION['id'];


$salida="";
if($id==0){
  $consulta= DB::query("SELECT * FROM traduccion");
  $salida.="<div class='container'>
  <div class='row'>";
  
   # $consulta= DB::query("SELECT * FROM traduccion where id_idiomas = ".$id);
    foreach ($consulta as $dato) {
      $salida.="
      <div class='col-md-4 mb-5'>
      <div class='card shadow' style='width: 18rem; border-radius:15px;'>
      <div class='card-body'>
        <h5 class='card-title text-center'>".$dato['titulo']."</h5>
        <h6 class='card-subtitle mb-2 text-muted'>Descripcion</h6>
        <p class='card-text'>".$dato['descripcion_corta']."</p>
        <h6 class='card-subtitle mb-2 text-muted'>Texto</h6>
        <p class='card-text'>".$dato['texto_articulo']."</p>
        <ul class='list-group list-group-flush'>
       
        <button type='button' class='btn btn-primary' id='btn-trad' value='".$dato['id']."' data-toggle='modal' data-target='#exampleModalScrollable'>
        Ver <i class='fas fa-eye'></i>
      </button>
        </ul>
      </div>
      </div>
      </div>";
  }
}
else{
  $consulta= DB::query("SELECT * FROM traduccion where id_idiomas = ".$valor);
  $salida.="<div class='container'>
  <div class='row'>";
  
   # $consulta= DB::query("SELECT * FROM traduccion where id_idiomas = ".$id);
    foreach ($consulta as $dato) {
      $salida.="
      <div class='col-md-4 mb-5'>
      <div class='card shadow' style='width: 18rem; border-radius:15px;'>
      <div class='card-body'>
        <h5 class='card-title text-center'>".$dato['titulo']."</h5>
        <h6 class='card-subtitle mb-2 text-muted'>Descripcion</h6>
        <p class='card-text'>".$dato['descripcion_corta']."</p>
        <h6 class='card-subtitle mb-2 text-muted'>Texto</h6>
        <p class='card-text'>".$dato['texto_articulo']."</p>
        <ul class='list-group list-group-flush'>
       
        <button type='button' class='btn btn-primary' id='btn-trad' value='".$dato['id']."' data-toggle='modal' data-target='#exampleModalScrollable'>
        Ver <i class='fas fa-eye'></i>
      </button>
        </ul>
      </div>
      </div>
      </div>";
  }
}


$salida.="</div>
</div>";
echo $salida;
?>