<?php 

session_start();
session_destroy();
if(isset($_SESSION['active'])){

}else{
    header("Location:/");
}
require 'includes/database.php';
include 'headerAdministrador.php';
?>

 <h3> Residencias Profesionales</h3><br>
 <table class="table table-hover w-1000" border="0">
<tr>
<td>Folio</td>
 <td>Nombre de la Empresa</td>
 <td>Nombre del Reprente Legal</td>
 <td>Giro</td>
 <td>Firma</td>
 <td>Envio</td>
 <td>Entregado</td>
 </tr>
<?php
$sql="SELECT * FROM  datos_e where tipo_A = 'Residencias'";
$resultado= mysqli_query($mysqli,$sql);


while ($mostrar=mysqli_fetch_array($resultado)){
?>


 <tr>
 <td class="Folio" ><?php echo $mostrar ['ID_Datos'].'/'.  $mostrar['tipo_A']; ?> </td>
 <td ><?php echo $mostrar ['Nombre_E']?> </td>
 <td><?php echo $mostrar ['Nombre_R']?> </td>
 <td><?php echo $mostrar ['Giro_Em']?> </td>

 <form action="" method="POST">
 <div class="form-check form-check-inline">
 <td>
   <input class="form-check-input" id="checked" type="checkbox" name="firma">
  </div>
  </td>
<td>
  <input class="form-check-input" type="checkbox" name="envio" id="inlineCheckbox2" value="envio"">
  </div> </td>
  <td>
  <input class="form-check-input" type="checkbox" name="entrga" >
  </td>
 
  </div>
</form>


<?php


}
?>
 </tr>
 </table>








</body>
</html>
