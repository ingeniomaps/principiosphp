<html>
  <head>
    <title>Parcial</title>
  </head>

  <body style='background-repeat:no-repeat; background-position: center 0;' background='Ima/fondo1.jpg'>
   <center>
   <div style='position:relative; width:200px; top:20px; left:-450px;'>
     <a href='cerrar.php'>Cerrar Sesión</a>
   </div>
<?php
  if($_COOKIE['permiso']>1){
   $conexion = mysql_connect("localhost", "root", "");
   mysql_select_db("clase", $conexion);
   $consulta = "select * from usuario";
   $resultados = mysql_query($consulta, $conexion);

   $contador = mysql_num_rows($resultados);

   if ($contador> 0) {
   echo "<div align= 'left' style='position:relative; width:550px; top: 148px; left: -200px;'>";
    echo "<table border='2' width='45%'>";
   echo "<tr><td><strong> Estudiantes: </strong></td></tr>";
     while ($rowEmp = mysql_fetch_assoc($resultados)) {
       if($rowEmp['rango']==1){
       echo "<tr><td>";
       echo "".$rowEmp['usuario']."<br>";
       echo "</td></tr>";
       }
     }
   echo "</table>";
   echo"<table border='2' width='45%' style='position:absolute; top: 0%; left: 300px;'>";
  if($_COOKIE['permiso']==3){

   $conexion = mysql_connect("localhost", "root", "");
   mysql_select_db("clase", $conexion);
   $consulta = "select * from usuario";
   $resultados = mysql_query($consulta, $conexion);

   $contador = mysql_num_rows($resultados);


   echo "<tr><td><strong> Profesores: </strong></td></tr>";
     while ($rowEmp = mysql_fetch_assoc($resultados)) {
       if($rowEmp['rango']==2){
         echo "<tr><td>";
         echo "".$rowEmp['usuario']."<br>";
         echo "</td></tr>";
       }
     }
    }
   echo "</table></div>";
   }
  }
  else{
    header ("Location: registro.php"); 
  }
?>
   </center>
  </body>
</html>