<?php include 'headerFor.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
$Acuerdo=$_POST ['T_A'];
  //$tipo_A=$_POST['tipo_A'];
  $TEmpresa=$_POST['TEmpresa'];


}
?>


<form class= "formulario" method="POST" action="FormularioRes.php" enctype="multipart/form-data ">
<div  id="secR">
  <label > ¿Qué tipo de empresa es?</label>
  <input class="form-check-input"  id= "T_P" type="radio" name="TEmpresa" id="TEmpresa"  value="EmpresaPublica"> Empresa Pública <br>
  <input class="form-check-input"  id= "T_Pr" type="radio" name="TEmpresa" id="Tempresa"  value="EmpresaPrivada"> Empresa Privada<br> 
  </div><br>
  <label >Tipo de Acuerdo</label><br>
<select class="campos_inp" name="T_A" id="T_a"<?php echo $ent_F?>
  <option value="no">Seleccionar una opción</option>
  <option value="Servicio Social">Servicio Social</option>
  <option value="Residencias">Residencias</option>
  <option value="Especialidad Dual">Especialidad Dual</option>
  </select>

<?php if( $TEmpresa ==='EmpresaPrivada' && $Acuerdo ==='Servicio Social'):?>
<p>Desbes comprobar que tienes un programa comunitario</p>
 Seleccionar un archivo PDF <input type="file"  name="Archivo" id="archivo" accept="application/pdf">

<?php endif?>

<?php if( $TEmpresa ==='EmpresaPrivada' && $Acuerdo ==='Especialidad Dual'):?>
<p>Total de horas</p>
<input type="text" >

<?php endif?>

<?php if( $TEmpresa ==='EmpresaPublica' && $Acuerdo ==='Especialidad Dual'):?>
<p>Total de horas</p>
<input type="text" >

<?php endif?>

</div>
</form>