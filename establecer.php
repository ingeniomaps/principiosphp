<?php

$usuarioDigitado = $_GET['usuario'];
$claveDigitada = $_GET['clave'];

setcookie("usuario", $usuarioDigitado);
$conexion = mysql_connect("localhost", "root", "");
mysql_select_db("clase", $conexion);
$consulta = "select * from usuario";
$resultados = mysql_query($consulta, $conexion);

$tienePermiso = 0;
$contador = mysql_num_rows($resultados);

if ($contador> 0) {
   while ($rowEmp = mysql_fetch_assoc($resultados)) {
      $us1 = $rowEmp['usuario'];
      $cla1 = $rowEmp['clave'];
      $ran1 = $rowEmp['rango'];

     for($i=1; $i<=3; $i++){
        if($us1==$usuarioDigitado && $cla1==$claveDigitada && $ran1==$i){
           $tienePermiso=$i;
        }
     }
   }
}


if($tienePermiso>0){
$cont = 1;
while($cont<=3){
  if($tienePermiso==$cont){
     setcookie("permiso", $cont);
     header ("Location: inicio.php"); 
  }
  $cont++;
}
}else{
header ("Location: registro.php"); 
}
?>