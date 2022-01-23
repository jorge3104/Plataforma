<?php 
session_start();
session_destroy();
include 'headerAdministrador.php';

if(empty($_SESSION['active'])){
/*header('Location: inicioAdm.php');*/
}

?>
<section id="fondo">
<p ><img src="imagenes/Logootipo.jpg" alt="" width="95%"> </p>

</section>

