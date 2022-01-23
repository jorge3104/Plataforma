<?php include 'headerFor.php';

require 'includes/database.php';


$errores = [];


  //variables globales
  $NombreE = '';
  $Nombre_L = '';
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
 
  $Total_H = ' ';
  $horas_E = '';
  $horas_S = '';
  //ESCRITURA
  $Numero_Esc ='';
  $F_D = '';
  $F_M = '';
  $F_A = '';
  $Otorgada = '';
  $Notaria = '';
  $Reg_P = '';
  $Folio = '';
  $Actividades = '';

  //Representante
  $Numero_EscR = '';
  $Dia_R = '';
  $Mes_R ='';
  $Año_R = '';
  $OtorgadaR = ' ';
  $NotariaR = ' ';
  $Entidad_Otor = '';
  $RFC = ' ';
  $Calle_R = '';
  $numero_R = ' ';
  $colonia_R = ' ';
  $municipio_R ='';
  $estado_R = ' ';
  $codigoR = ' ';
  //datos_a
  $Vigencia = ' ';
  $testigo = ' ';
  $FolioA = '';

 


 $Acuerdo=' ';
  //$tipo_A= '';
  $TEmpresa='';





//Revisar que no este vacio con empty 


?>

<!--  agregar al formulario para que lea los archivos ectype  = "multipart/form-data"  -->
<div class="container-fluid">
<form class= "formulario" method="POST" action="wordServicio.php">
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
<!--<input  class="campos_inp" type="number"  id= "Numero" name= "Horas_R" placeholder="Ejem. 80" value="<?php //echo $Horas_R?>"><label >Horario que debe cumplir el alumno </label>-->
<input class="campos_inpN"  type="time"  id= "Numero" name= "Horas_E" value="<?php echo $Horas_E?>"> <LAbel>A</LAbel>
<input  class="campos_inpN"  type="time"  id= "Numero" name= "Horas_S" value="<?php echo $Horas_S?>"><br>

<!--Datos principales de la escritura-->
<p>Datos de la Escritura Pública</p>
<input class="campos_inp" type="number" id= "Numero_Escritura" name="Numero_Esc" placeholder="Número" value="<?php echo $Numero_EscR?>"><br>
<label>Fecha</label>

<select class="campos_inp"  id= "Dia" name="F_D" value="<?php echo $F_D ?>">
 <option selected hidden>Día</option>
 <option value="1">1</option> 
 <option value="2">2</option> 
 <option value="3">3</option> 
 <option value="4">4</option> 
 <option value="5">5</option> 
 <option value="6">6</option> 
 <option value="7">7</option> 
 <option value="8">8</option> 
 <option value="9">9</option> 
 <option value="10">10</option> 
 <option value="11">11</option> 
 <option value="12">12</option> 
 <option value="13">13</option> 
 <option value="14">14</option> 
 <option value="15">15</option> 
 <option value="16">16</option> 
 <option value="17">17</option> 
 <option value="18">18</option> 
 <option value="19">19</option> 
 <option value="20">20</option> 
 <option value="21">21</option> 
 <option value="22">22</option> 
 <option value="23">23</option> 
 <option value="24">24</option> 
 <option value="25">25</option> 
 <option value="26">26</option> 
 <option value="27">27</option> 
 <option value="28">28</option> 
 <option value="29">29</option> 
 <option value="30">30</option> 
 <option value="31">31</option> 
 </select><br>


<select class="campos_inp" name="F_M" id="Mes_R" value="<?php echo $F_M?>">
  <option value="no">Mes</option>
 <option value="01">Enero</option> 
 <option value="02">Febrero</option> 
 <option value="03">Marzo</option> 
 <option value="04">Abril</option> 
 <option value="05">Mayo</option> 
 <option value="06">Junio</option> 
 <option value="07">Julio</option> 
 <option value="08">Agosto</option> 
 <option value="09">Septiembre</option> 
 <option value="10">Octubre</option> 
 <option value="11">Noviembre</option> 
 <option value="12">Diciembre</option> 
 </select><br>
<input class="campos_inp" type="number"  id= "Año" name="F_A" placeholder="Año" value="<?php echo $F_A?>"><br>
<label>Otorgada por</label>
<input class="campos_inp" type="text"  id= "Otorgada" name="Otorgada" placeholder="Ejem. Lic Heriberto Roman Talavera" value="<?php echo $Otorgada?>"><br>
<label>Notaria Pública </label>
<input class="campos_inp" type="text"  id= "Titular_Notaria" name="Notaria" placeholder="Ejem. 62 del Distrito Federal" value="<?php echo $Notaria?>"><br>
<label>Registro Público</label>
<input class="campos_inp" type="text"  id= "Registro_P" name="Reg_P" placeholder="Ejem. Comercial"value="<?php echo $Reg_P?>"><br>
<label>Folio Mercantil</label>
<input class="campos_inp" type="number"  id= "Folio" name="Folio_Mercantil" placeholder="Ejem. 596" value="<?php echo $Folio?>"><br>
<label>Actividades de las empresa</label>
<textarea class="campos_inp"  id= "Actividades" name="Actividades" > <?php echo $Actividades?> </textarea>
<!--Datos principales de la Representante Legal -->
<p>Datos del Respresentante Legal  </p>
<label>Numero de Escritura Pública</label>
<input class="campos_inp" type="number" id="N_EscrR" name="N_EscR" placeholder="Ejem. 596" value="<?php echo $Numero_EscR?>"><br>
<label>Fecha</label>
<select class="campos_inp"  id="Dia_R" name="Dia_R">
 <option >Día</option>
 <option value="1">1</option> 
 <option value="2">2</option> 
 <option value="3">3</option> 
 <option value="4">4</option> 
 <option value="5">5</option> 
 <option value="6">6</option> 
 <option value="7">7</option> 
 <option value="8">8</option> 
 <option value="9">9</option> 
 <option value="10">10</option> 
 <option value="11">11</option> 
 <option value="12">12</option> 
 <option value="13">13</option> 
 <option value="14">14</option> 
 <option value="15">15</option> 
 <option value="16">16</option> 
 <option value="17">17</option> 
 <option value="18">18</option> 
 <option value="19">19</option> 
 <option value="20">20</option> 
 <option value="21">21</option> 
 <option value="22">22</option> 
 <option value="23">23</option> 
 <option value="24">24</option> 
 <option value="25">25</option> 
 <option value="26">26</option> 
 <option value="27">27</option> 
 <option value="28">28</option> 
 <option value="29">29</option> 
 <option value="30">30</option> 
 <option value="31">31</option> 
 </select><br>


<select class="campos_inp" name="Mes_R" id="Mes_R" value="<?php echo $Mes_R?>">
  <option value="no">Mes</option>
 <option value="01">Enero</option> 
 <option value="02">Febrero</option> 
 <option value="03">Marzo</option> 
 <option value="04">Abril</option> 
 <option value="05">Mayo</option> 
 <option value="06">Junio</option> 
 <option value="07">Julio</option> 
 <option value="08">Agosto</option> 
 <option value="09">Septiembre</option> 
 <option value="10">Octubre</option> 
 <option value="11">Noviembre</option> 
 <option value="12">Diciembre</option> 
 </select><br>
<input class="campos_inp" type="Año" name= "Año_R" placeholder="Año" value="<?php echo $Año_R?>"><br>
<label>Otorgada por</label>
<input class="campos_inp" type="text"  id= "Otorgada" name="OtorgadaR"  placeholder="Ejem. Lic Heriberto Roman Talavera" value="<?php echo $OtorgadaR?>"><br>
<label>Notaria Pública Número</label>
<input class="campos_inp" type="text"  id= "Titular_N" name="NotariaR"  placeholder="Ejem. 62 del Distrito Federal" value="<?php echo $NotariaR?>"><br>
<label>Entidad Federativa donde fue Otorgada</label>
<select class="campos_inp"  id= "Entidad_Otor" name="Entidad_Otor"  value=" " >
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


<label>Dirección de la notaria</label>
<input class="campos_inp" type="text"  id= "Calle"  name= "calle_R" placeholder="Av o Calle" value="<?php echo $Calle_R?>"><br>
<input class="campos_inp" type="number"  id= "Numero" name= "numero_R" placeholder="Número"min="1" value="<?php echo $numero_R?>"><br>
<input class="campos_inp" type="text"  id= "Colonia" name= "colonia_R" placeholder="Colonia" value="<?php echo $colonia_R?>"><br>
<input class="campos_inp" type="text"  id= "Municipio" name="Municipio_R" placeholder="Municipio o Alcadía" value="<?php echo $municipio_R?>"> <br>
<select class="campos_inp"  id= "Estado" name="estadoR" value="<?php echo $estado_R?>">
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
  <input class="campos_inp" type="number"  id= "CodigoP" name="CP_R" placeholder="Codigo Postal"  value="<?php echo $codigoR?>"> <br>
   <label >Vigencia del Acuerdo </label>
  <label >Inicio</label><input class="campos_inp" type="date"  id= "Vigencia"  name="fechaV_I" " value="<?php echo $Vigencia_I?>"><br>
  <label >Fin</label><input class="campos_inp" type="date"  id= "Vigencia"  name="fechaV_F" " value="<?php echo $Vigencia_F ?>"><br>
  <label>Testigo del Acuerdo</label>
  <input class="campos_inp" type="text"  id= "Testigo" name= "testigo" placeholder="Ejem. Lic Fernando Reyes Martinez" value="<?php echo $testigo?>"><br>
  

  
  <button type="submit" class="btn btn-outline-success">Registrarse</button><br>
  <a href="index.php" class="btn btn-outline-success">Salir</a>
  </div>
</fieldset>
</form>
</div>
