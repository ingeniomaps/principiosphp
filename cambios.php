<html>
  <head>
    <title>Cambios</title>
  </head>
  <body style='background-repeat:no-repeat; background-attachment: fixed; background-position: center 0;' background='Ima/fondo3.jpg'>
    <center>
      <?php
       if($_COOKIE['permiso']>1){
         $accion=$_GET["accion"];
         if($accion==1 && $_COOKIE['permiso']==3){
         echo" <div style='position:relative; background-position: center 0; width:300px; top:150px; left:150px; background:#ffffff;'>";
         echo"<table cellpadding='5'>";
         echo"<form method=POST action='cambio.php' autocomplete='off' name='mihidden'>";
         echo"<tr><td>Usuario:</td><td><input type=text name='usuario'><br></td></tr>";
         echo"<tr><td>Clave:</td><td><input type=text name='clave'><br></td></tr>";
         echo"<tr><td>Que es:</td><td><SELECT name='rango'>";
          echo"<OPTION selected label='Estudiante' value='1'>Estudiante</OPTION>";
          echo"<OPTION label='Profesor' value='2'>Profesor</OPTION>";
          echo"</SELECT><br></td></tr>";
          echo"<input type='hidden' name='accion' value='1'>";
        echo"<tr><td></td><td><input type='submit' value='Enviar'></td></tr>";
        echo"</form>";
        echo"</table>";
        echo" </div>";
        }else if($accion==2 && $_COOKIE['permiso']==3){
         echo" <div style='position:relative; background-position: center 0; width:300px; top:150px; left:150px; background:#ffffff;'>";
         echo"<table cellpadding='5'>";
         echo"<form method=POST action='cambio.php?accion2' autocomplete='off' name='mihidden'>";
         echo"<tr><td>Usuario a Eliminar:</td><td><input type=text name='usuario'><br></td></tr>";
         echo"<input type='hidden' name='accion' value='2'>";
        echo"<tr><td></td><td><input type='submit' value='Enviar'></td></tr>";
        echo"</form>";
        echo"</table>";
        echo" </div>";
        }else if($accion==3 && $_COOKIE['permiso']==2){
         echo" <div style='position:relative; background-position: center 0; width:300px; top:150px; left:150px; background:#ffffff;'>";
         echo"<table cellpadding='5'>";
         echo"<form method=POST action='cambio.php?accion3' autocomplete='off' name='mihidden'>";
         echo"<tr><td>Estudiante:</td><td><input type=text name='usuario'><br></td></tr>";
         echo"<tr><td>Nota:</td><td><input type=text name='nota'><br></td></tr>";
         echo"<input type='hidden' name='accion' value='3'>";
        echo"<tr><td></td><td><input type='submit' value='Enviar'></td></tr>";
        echo"</form>";
        echo"</table>";
        echo" </div>";
        }else{
           header("Location:inicio.php");
        }
       }else{
          header("Location:registro.php");
       }
      ?>
    </center>
  </body>
</html>