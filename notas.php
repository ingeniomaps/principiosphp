<html>
  <head>
    <title>Parcial</title>
  </head>

  <body style='background-repeat:no-repeat; background-position: center 0;' background='Ima/fondo1.jpg'>
   <center>
   <div style='position:relative; width:200px; top:20px; left:-450px;'>
     <a href='cerrar.php'>Cerrar Sesión</a>
   </div>
   <div style='position:relative; width:300px; top: 200px; left: -250px'>
    <table style='font-family: Snap ITC; font-size: 24px;'>
<?php
  if($_COOKIE['permiso']>0){
   $conexion = mysql_connect("localhost", "root", "");
   mysql_select_db("clase", $conexion);
   $consulta = "select * from usuario";
   $resultados = mysql_query($consulta, $conexion);

   $contador = mysql_num_rows($resultados);
   if($_COOKIE['permiso']>1){
    if ($contador> 0) {
     while ($rowEmp = mysql_fetch_assoc($resultados)) {
      if($rowEmp['rango']==1){
       echo "<strong> Estudiante: ".$rowEmp['usuario']."</strong>";
       echo "<strong> Nota: ".$rowEmp['nota']."</strong><br>";
      }
     }
    }
   }
   else{
    if ($contador> 0) {
     while ($rowEmp = mysql_fetch_assoc($resultados)) {
      if($rowEmp['usuario']==$_COOKIE['usuario']){
       echo "<strong> Nota: ".$rowEmp['nota']."</strong><br>";
      }
     }
    }     
   }
  }
  else{
    header ("Location: registro.php"); 
  }
?>
    </table>
   </div>
   </center>
  </body>
</html>