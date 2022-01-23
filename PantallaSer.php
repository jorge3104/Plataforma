<?php 
session_start();
session_destroy();
if(empty($_SESSION['active'])){

}else{
    header("Location:/");
}

require 'includes/database.php';
include 'headerAdministrador.php';
?>

 <h3> Servicio Social</h3>

<table class="table table-hover w-1000" border="0">
<tr>
<td>Folio</td>
 <td>Nombre de la Empresa</td>
 <td>Nombre del Representante Legal</td>
 <td>Giro</td>
 <td>Firma</td>
 <td>Envio</td>
 <td>Entregado</td>
 </tr>
<?php
$sql="SELECT * FROM  datos_e where tipo_A = 'Servicio' AND Tipo_E = 'EmpresaPublica'";
$resultado= mysqli_query($mysqli,$sql);

while ($mostrar=mysqli_fetch_array($resultado)){
?>


 <tr>
 <td class="Folio"  ><?php echo $mostrar ['RFC_ID'].'/'.  $mostrar['tipo_A']; ?> </td>
 <td><?php echo $mostrar ['Nombre_E']?> </td>
 <td><?php echo $mostrar ['Nombre_R']?> </td>
 <td><?php echo $mostrar ['Giro_Em']?> </td>
 <div class="form-check form-check-inline">
 <td>
   <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="firma">
  </div>
  </td>
<td>
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="envio">
  </div> </td>
  <td>
  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="entrega" >
  </td>
</div>
<?php
}
?>
 </tr>
 </table>








</body>
</html>