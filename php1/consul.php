<?php
require_once '../db/conexion.php';
session_start();
$salida4="";
$salida = "
<ul class='nav nav-tabs' role='tablist'>";
$salida2="";
$salida3="";
$dato=$_POST['id'];
$account = DB::query("SELECT id,(SELECT titulo FROM traduccion where id=".$dato.") titulo,(SELECT codigo from idiomas where id = id_idioma) idiom,traduccion FROM traduccion_articulo where id_trad=".$dato);

foreach ($account as $username) {
    if($account == 0){
        $salida.="
        <li class='nav-item '>
        <a class='nav-link active bg-danger text-light' data-toggle='tab' href=#".$username['titulo'].$username['id'].">".$username['idiom']."</a>   </li>";
$salida3.="<div id='".$username['titulo'].$username['id']."' class='container tab-pane active'>

<p>".$username['traduccion']."</p>
</div>";

}else{
$salida.="<li class='nav-item'>
        <a class='nav-link' data-toggle='tab' href=#".$username['titulo'].$username['id'].">".$username['idiom']."</a>   </li>";
$salida3.="<div id=".$username['titulo'].$username['id']." class='container tab-pane fade'>
<p>".$username['traduccion']."</p>
</div>";
}
}
$salida.="</ul>";
$salida2.="<div class='tab-content'>";
$salida2.=$salida3;
$salida2.="</div>";

echo $salida.$salida2;
?>