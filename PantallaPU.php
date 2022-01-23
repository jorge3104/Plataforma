<?php
session_start();


include 'headerUsuario.php';
require 'includes/database.php';
if(isset($_SESSION['usuario'])){//no deja entrar a la  pantalla principal si no esta logueado
 $usuario = $_SESSION['usuario'];
}

?>

<table class="table table-hover w-1000" border="0">
<tr>
<td>RFC</td>
 <td>Nombre de la Empresa</td>
 <td>Nombre del Representante Legal</td>
 <td>Giro</td>
  <td>Documento</td>
 <td>Firma</td>
 <td>Envio</td>
 <td>Entregado</td>

 </tr>
<?php
 $usuario = $_SESSION['usuario'];
$sql="SELECT * FROM  datos_e where RFC_ID= '$usuario'";
$resultado= mysqli_query($mysqli,$sql);$path="archivos";



while ($mostrar=mysqli_fetch_array($resultado)){
?>


 <tr>
 <td class="Folio"><?php echo $mostrar ['RFC_ID'].'/'.  $mostrar['tipo_A']; ?> </td>
 <td><?php echo $mostrar ['Nombre_E']?> </td>
 <td><?php echo $mostrar ['Nombre_R']?> </td>
 <td><?php echo $mostrar ['Giro_Em']?> </td>
 <td> <a href="archivo-servicio.php?$id=<?php echo $mostrar['RFC_ID']?>"><?php echo $mostrar ['ArchivoComprobante'];?></a> </td>
 


 <?php
} ?>

</html>