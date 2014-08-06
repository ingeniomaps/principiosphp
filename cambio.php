<html>
  <head>
    <title>Cambios</title>
  </head>
  <body style='background-repeat:no-repeat; background-attachment: fixed; background-position: center 0;' background='Ima/fondo3.jpg'>
    <center>
      <?php
       if($_COOKIE['permiso']>1){
        $c=0;
        $accion=$_POST["accion"];
        $p1 = $_POST['usuario'];
        $p2 = $_POST['clave'];
        $p3 = $_POST['rango'];
        $p4 = $_POST['nota'];
        $conexion = mysql_connect("localhost", "root", "");
        mysql_select_db("clase", $conexion);
        if($p1!=null && $p2!=null && $accion==1){
          $consulta = "INSERT INTO usuario (usuario, clave, rango) VALUES ('$p1', $p2, $p3)";
          mysql_query($consulta);
          $c=1;
        }else if($p1!=null && $accion==2){
          $consulta = "DELETE FROM usuario WHERE usuario='$p1'";
          mysql_query($consulta);
          $c=2;
        }else if($p1!=null && $accion==3){
          $consulta = "UPDATE usuario SET nota=$p4 WHERE usuario='$p1'";
          mysql_query($consulta);
          $c=3;
        }
        if($c>0){
           echo "<center><div style='position:relative; background-position: center 0; width:300px; top:150px; left:150px; background:#ffffff;'>";
           echo "<table cellpadding='5'>";
           if($c==1){
             echo "Usuario Creado";
          }
          if($c==2){
             echo "Usuario Eliminado";
          }
          if($c==3){
             echo "Nota agregada exitosamente";
          }
        echo "<br><a href='inicio.php'>Volver a la pagina Principal</a>";
        echo "</table></div></center>";
        }else{
           echo "<center><div style='position:relative; background-position: center 0; width:300px; top:150px; left:150px; background:#ffffff;'>";
           echo "<table cellpadding='5'>";
             echo "Se ha precentado un error";
        echo "<br><a href='cambios.php?accion=$accion'>Intentarlo de Nuevo</a>";
        echo "<br><a href='inicio.php'>Volver a la pagina Principal</a>";
        echo "</table></div></center>";
        }
       }else{
          header("Location:inicio.php");
       }
      ?>
    </center>
  </body>
</html>