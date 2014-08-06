<html>
  <head>
    <title>Clase PHP</title>
  </head>
  <body style='background-repeat:no-repeat; background-attachment: fixed; background-position: center 0;' background='Ima/fondo.jpg'>
    <center>
      <?php
      if($_COOKIE['permiso']==0){
        echo"<table style='position:relative; top:200px; left:-200px'>";
        echo"<form method=GET action='establecer.php' autocomplete='off'>";
        echo"<tr><td>Usuario </td><td><input type=text name='usuario'><br></td></tr>";
        echo"<tr><td>Clave </td><td><input type=password name='clave'><br></td></tr>";
        echo"<tr><td><input type='submit' value='Enviar'></td></tr>";
        echo"</form>";
        echo"<tr><td><a href=registrarse.html>Registrarse</a></td></tr>";
        echo"</table>";
      }
      else{
        header("Location:inicio.php");
      }
      ?>
    </center>
  </body>
</html>