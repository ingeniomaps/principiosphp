<html>
  <head>
    <title></title>
  </head>

  <body style='background-repeat:no-repeat; background-position: center 0;' background='Ima/fondo1.jpg'>
   <center>
   <div style='position:relative; width:200px; top:20px; left:-450px;'>
     <a href='cerrar.php'>Cerrar Sesión</a>
   </div>
   <div style='position:relative; width:300px; top: 200px; left: -250px'>
    <table style='font-family: Snap ITC; font-size: 24px;'>
     <?php
	if($_COOKIE['permiso']==3){
	  echo"<tr><td><a href='cambios.php?accion=1'>Crear Usuario</a></td></tr>";
	  echo"<tr><td><a href='cambios.php?accion=2'>Borrar Usuario</a></td></tr>";
	  echo"<tr><td><a href='listado.php'>Lista de Usuarios</a></td></tr>";
	  echo"<tr><td><a href='notas.php'>Notas</a></td></tr>";
	}else if($_COOKIE['permiso']==2){
	  echo"<tr><td><a href='cambios.php?accion=3'>Digitar Nota</a></td></tr>";
	  echo"<tr><td><a href='notas.php'>Ver Nota</a></td></tr>";
	  echo"<tr><td><a href='listado.php'>Lista de Usuarios</a></td></tr>";
	}else if($_COOKIE['permiso']==1){
	  echo"<tr><td><a href='notas.php'>Ver Notas</a></td></tr>";
	}else{
	  header("Location:registro.php");
	}
     ?>
    </table>
   </div>
   </center>
  </body>


</html>