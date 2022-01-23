<?php include 'headerUsuario.php';


session_start();
session_destroy();

if(empty($_SESSION['active'])){//no deja entrar a la  pantalla principal si no esta logueado
  
}


?>


</body>

<input class="boton_D" type= "submit" value="Subir documento">
<input  class="boton_D" type="reset" value="Descargar Documento Actualizado">

