<?php include 'headerFor.php';

require 'includes/database.php';


$errores = [];


  //variables globales
  $NombreE = '';
  $Nombre_L = '';
  $RFC = '';
  $calle = '';
  $numero = '';
  $colonia = '';
  $municipio = '';
  $codigo = ' ';
  $ent_F = ' ';
  $Giro_Em = '';
  $Correo = '';
  $Password = ''; 
//Actividades
  $Desc_A = ' ';
 

 $Acuerdo=' ';
  //$tipo_A= '';
  $TEmpresa='';





//Revisar que no este vacio con empty 


?>

<!--  agregar al formulario para que lea los archivos ectype  = "multipart/form-data"  -->
<div class="container-fluid">
<form class= "formulario" method="POST" action="wordEspPub.php" >
    <div class="formulario__campos">
<fieldset>
   <!--Datos principales de la empresa-->
<p>Datos de la Empresa</p>
<div class="campos">
<label> Nombre </label>
<input class="campos_inp" type= "text" id= "Nombre_E" name="Nombre_E" placeholder="Ejem. Intituto Tecnologico de Tlalnepantla" value="<?php echo $NombreE?>" required>
<label>Representante Legal</label>
<input class="campos_inp" type="text"  id= "Representante_L" name= "Nombre_L" placeholder="Ejem. Lic. Eduardo Espinoza" required value="<?php echo $Nombre_L?>" required>
<label>RFC</label>
<input class="campos_inp" type="text"  id= "RFC" name="RFC" maxlength="13"value="<?php echo $RFC?>"  onchange="mayusculas()" ><br>
<script>
/* PARA HACER MAYUSCULAS EL TEXTO  */
function mayusculas() {
  const x = document.getElementById("RFC");
  x.value = x.value.toUpperCase();
}
</script>

<label>Dirección de la Empresa</label>
<input class="campos_inp" type="text"  id= "Calle"  name= "calle" placeholder="Av o Calle" value="<?php echo $calle?>" require ><br>
<input class="campos_inpN" type="text"  id= "Numero" name= "numero" placeholder="Número" min="1"value="<?php echo $numero?>" require><br>
<input class="campos_inp" type="text"  id= "Colonia" name= "colonia" placeholder="Colonia" value="<?php echo $colonia?>"><br>
<input class="campos_inp" type="text" id="municipio" name= "municipio" placeholder="Municipio o Alcadía" value="<?php echo $municipio?>"><br>
<input class="campos_inp" type="number" id="C_P" name= "C_P" placeholder="Codigo Postal"value="<?php echo $codigo?>"><br>
<select class="campos_inp"  id= "Estado" name= "ent_F" value=" " >
      <option value="no">Entidad federativa</option>
      <option value="Aguascalientes">Aguascalientes</option>
      <option value="Baja California">Baja California</option>
      <option value="Baja California Sur">Baja California Sur</option>
      <option value="Campeche">Campeche</option>
      <option value="Chiapas">Chiapas</option>
      <option value="Chihuahua">Chihuahua</option>
      <option value="CDMX">Ciudad de México</option>
      <option value="Coahuila">Coahuila</option>
      <option value="Colima">Colima</option>
      <option value="Durango">Durango</option>
      <option value="Estado de México">Estado de México</option>
      <option value="Guanajuato">Guanajuato</option>
      <option value="Guerrero">Guerrero</option>
      <option value="Hidalgo">Hidalgo</option>
      <option value="Jalisco">Jalisco</option>
      <option value="Michoacán">Michoacán</option>
      <option value="Morelos">Morelos</option>
      <option value="Nayarit">Nayarit</option>
      <option value="Nuevo León">Nuevo León</option>
      <option value="Oaxaca">Oaxaca</option>
      <option value="Puebla">Puebla</option>
      <option value="Querétaro">Querétaro</option>
      <option value="Quintana Roo">Quintana Roo</option>
      <option value="San Luis Potosí">San Luis Potosí</option>
      <option value="Sinaloa">Sinaloa</option>
      <option value="Sonora">Sonora</option>
      <option value="Tabasco">Tabasco</option>
      <option value="Tamaulipas">Tamaulipas</option>
      <option value="Tlaxcala">Tlaxcala</option>
      <option value="Veracruz">Veracruz</option>
      <option value="Yucatán">Yucatán</option>
      <option value="Zacatecas">Zacatecas</option>
  </select><br>
 <label>Giro de la Empresa</label>
<input class="campos_inp" type="text"  id= "Giro" name="Giro_Em" placeholder="Giro de la Empresa" value="<?php echo $Giro_Em?>"><br>
<label>Correo Electronico</label>
<input class="campos_inp" type="Correo" name="Correo" placeholder="Correo Electronico" value="<?php echo $Correo?>">
<label>Contraseña </label>
<input class="campos_inp" type="password" name="password" maxlength="10" placeholder="Password" > <br>

<p>Descripcion de las actividades de los alumnos</p>
<label>Descripción</label><br>
<textarea  class="campos_inp" id= "Descripcion"  name="D_A" ><?php echo $Desc_A?></textarea><br>
<label >Horario que debe cumplir el alumno </label>
<input class="campos_inpN"  type="time"  id= "Numero" name= "Horas_E" value="<?php echo $Horas_E?>"> <LAbel>A</LAbel>
<input  class="campos_inpN"  type="time"  id= "Numero" name= "Horas_S" value="<?php echo $Horas_S?>"><br>
<label for="">Total de Horas por día</label>
<input class="campos_inp" type="text" id="TH" name="Total_H" >

<label for=""> Seleccionar el tipo de acuerdo que desea realizar</label><br>
<select  id="select" class="campos_inp" name="T_A" >
  <option value="no">Seleccionar una opción</option>
  <option value="Servicio">Servicio Social</option>
  <option value="residencias">Residencias</option>
  <option value="EspecialidadDual">Especialidad Dual</option>
  </select><br><br>
  <div  id="secR">
    <label >Seleccionar el tipo de empresa que es </label>
    <input class="form-check-input"  id= "T_P" type="radio" name="TEmpresa"   value="EmpresaPublica" onclick="publica()" />Empresa Pública <br>
    <input class="form-check-input"  id= "T_Pr" type="radio" name="TEmpresa"   value="EmpresaPrivada" onclick="privada()"/>  Empresa Privada<br> 
    <br>
  </div>
  

  

  <button type="submit" class="btn btn-outline-success">Registrarse</button><br>
  <a href="index.php" class="btn btn-outline-success">Salir</a>
  </div>
</fieldset>
</form>
</div>
