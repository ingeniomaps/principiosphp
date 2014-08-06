<?php
if($_GET['usuario']!=null && $_GET['clave']!=null){
 $p1 = $_GET['usuario'];
 $p2 = $_GET['clave'];
 $p3 = $_GET['rango'];
 $conexion = mysql_connect("localhost", "root", "");
 mysql_select_db("clase", $conexion);
 $consulta = "INSERT INTO usuario (usuario, clave, rango) VALUES ('$p1', $p2, $p3)";
 mysql_query($consulta);
 setcookie("permiso", "1");
 header("Location:inicio.php");
}
else{
echo "<body style='background-repeat:no-repeat; background-position: center 0;' background='Ima/fondo2.jpg'>";
  echo "<center><div style='position:relative; background-position: center 0; width:300px; top:150px; left:150px; background:#00A0C2;'>";
  echo "<table cellpadding='5'>";
    echo "Registro mal hecho";
    echo "<br><a href='registrarse.html'>Intentarlo de nuevo</a>";
    echo "<br><a href='registro.php'>Ir a la pagina Principal</a>";
  echo "</table></div></center>";
 echo "</body>";
}
?>