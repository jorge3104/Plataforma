<?php

require 'includes/database.php';
//consulta para los tipos de acuerdos
$consulta = "SELECT * FROM tipo_acuerdo";
$resultadoC = mysqli_query($mysqli, $consulta);


//tipo de acuerto 
$tipo_A= '';

if($_SERVER['REQUEST_METHOD']=='POST'){

$tipo_A=$_POST['tipo_A'];

echo "<pre>";
var_dump($_POST);
echo "</pre>";

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   
    <title>Document</title>
</head>
<body>
<header >
       
<div class="container">
<form id="Form1" action="">
 <h3> Registro</H3>
 <label>Correo Electronico</label>
<input  type="Correo" name="Correo" placeholder="Correo Electronico">
<label>Contraseña </label>
<input  type="password" name="password" maxlength="10" placeholder="Password" ><br>
<div class="btn-box">
<input type="reset"  value="Limpiar">
<input type= "submit" id="Antes" value="Registrarse">
</div>
</form> 

<form id="Form2" action="">
<H3>Datos de la empresa</H3>
<label> Nombre </label>
<input  type= "text" id= "Nombre_E" name= "Nombre_E" placeholder="Ejem. Intituto Tecnologico de Tlalnepantla" value="<?php echo $NombreE?>"><br>
<label>Representante Legal</label>
<input  type="R_L"  id= "Representante_L" name= "Nombre_L" placeholder="Ejem. Lic. Eduardo Espinoza" value="<?php echo $Nombre_L?>"><br>
<label>Dirección de la Empresa</label><br>
<input  type="text"  id= "Calle"  name= "calle" placeholder="Av o Calle" value="<?php echo $calle?>" >
<input  type="number"  id= "Numero" name= "numero" placeholder="Número"min="1"value="<?php echo $numero?>">
<input  type="text"  id= "Colonia" name= "colonia" placeholder="Colonia"value="<?php echo $colonia?>">
<input  type="text" id="municipio" name="municipio" placeholder="Municipio o Alcadía" value="<?php echo $municipio?>">
<input  type="text" id="C_P" name="C_P" placeholder="Codigo Postal"value="<?php echo $codigo?>">
<select   id= "Estado" name="ent_F" value="<?php echo $ent_F?>" > 
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
<input  type="text"  id= "Giro" name="Giro_Em" placeholder="Giro de la Empresa" value="<?php echo $Giro_Em?>"><br>
<div class="btn-box">
<input type="reset"  value="Limpiar">
<input type= "submit" id="Antes1" value="Registrarse">
</div>
</form>

<form id="Form3" action="">
<h3>Descripcion de ctividades a realizar por los alumnos</h3>
<label>Descripción</label><br>
<textarea  id= "Descripcion"  name="D_A" ><?php echo $Desc_A?></textarea><br>
<label >Horas que debe cumplir el alumno </label>
<input  type="number"  id= "Numero" name= "Horas_R" placeholder="Ejem. 80" value="<?php echo $Horas_R?>"
<label >Horario que debe cumplir el alumno </label>
<input  type="time"  id= "Numero" name= "Horas_E" value="<?php echo $Horas_E?>"> a
<input  type="time"  id= "Numero" name= "Horas_S" value="<?php echo $Horas_S?>">
<div class="btn-box">
<input type="reset"  value="Limpiar">
<input type= "submit" id="Antes2" value="Registrarse">
</div>
</form>

<form id="Form4" action="">
<h3>Datos de la Escritura</h3>
<label>Numero de la Escritura Pública</label>
<input  type="number" id= "Numero_Escritura" name="Numero_Esc" placeholder="Número"min="1" value="<?php echo $Numero_Esc?>"><br>
<label>Fecha</label>
<select  type="number"  id= "Dia" name="F_D" value="<?php echo $F_D ?>">
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
 </select>
<select  name="F_M" id="Mes_R" value="<?php echo $F_M ?>">
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
 </select>
<input  type="number"  id= "Año" name="F_A" placeholder="Año" value="<?php echo $F_A?>"><br>
<label>Otorgada por</label>
<input  type="text"  id= "Otorgada" name="Otorgada" placeholder="Ejem. Lic Heriberto Roman Talavera" value="<?php echo $Otorgada?>">
<label>Notaria Pública </label>
<input  type="text"  id= "Titular_Notaria" name="Notaria" placeholder="Ejem. 62 del Distrito Federal" value="<?php echo $Notaria?>"><br>
<label>Registro Público</label>
<input  type="text"  id= "Registro_P" name="Reg_P" placeholder="Ejem. Comercial"value="<?php echo $Reg_P?>"  ><br>
<label>Folio Mercantil</label>
<input  type="number"  id= "Folio" name="Folio_Mercantil" placeholder="Ejem. 596" value="<?php echo $Folio?>" ><br>
<label>Actividades que se realizan en la empresa</label><br>
<textarea   id= "Actividades" name="Actividades" > <?php echo $Actividades?> </textarea>
<div class="btn-box">
<input type="reset"  value="Limpiar">
<input type= "submit" id="Antes3" value="Registrarse">
</div>
</form>

<form id="Form5" action="">
<h3>Respresentante Legal Escritura Pública </h3>
<label>Numero de Escritura Pública</label>
<input  type="number" id="N_EscrR" name="N_EscR" placeholder="Ejem. 596" value="<?php echo $Numero_Esc?>"><br>
<label>Fecha</label>
<select   id="Dia_R" name="Dia_R" value="<?php echo $Dia_R?>">
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
 </select>
<select  name="Mes_R" id="Mes_R" value="<?php echo $Mes_R?>">
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
 </select>
<input  type="Año" name= "Año_R" placeholder="Año" value="<?php echo $Año_R?>"><br>
<label>Otorgada por</label>
<input  type="text"  id= "Otorgada" name="OtorgadaR"  placeholder="Ejem. Lic Heriberto Roman Talavera" value="<?php echo $OtorgadaR?>"><br>
<label>Notaria Pública Número</label>
<input  type="text"  id= "Titular_N" name="NotariaR"  placeholder="Ejem. 62 del Distrito Federal" value="<?php echo $NotariaR?>"><br>
<label>RFC</label>
<input  type="text"  id= "RFC" name="RFC" maxlength="10"value="<?php echo $RFC?>" ><br>
<label>Dirección de la notaria</label>
<input  type="text"  id= "Calle"  name= "calle_R" placeholder="Av o Calle" value="<?php echo $Calle_R?>">
<input  type="number"  id= "Numero" name= "numero_R" placeholder="Número"min="1" value="<?php echo $numero_R?>">
<input  type="text"  id= "Colonia" name= "colonia_R" placeholder="Colonia"value="<?php echo $colonia?>">
<input  type="text"  id= "Municipio" name="municipio_R" placeholder="Municipio o Alcadía" value="<?php echo $municipio_R?>">
<select   id= "Estado" name="estado" >
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
  </select>
  <input  type="text"  id= "pais" name="pais" placeholder="País">
  <input  type="number"  id= "CodigoP" name="CP_R" placeholder="Codigo Postal"><br>
  <input type="reset"  value="Limpiar">
<input type= "submit" id="Antes4" value="Registrarse">
</form>

  <form id="Form6" action="">
  <h3>Datos Externos**</h3>
  <label > ¿Qué tipo de empresa es?</label><br>
  <input class="form-check-input"  id= "T_P" type="radio" name="TEmpresa" id="TEmpresa"  value="EmpresaPublica"> Empresa Pública <br>
  <input class="form-check-input"  id= "T_Pr" type="radio" name="TEmpresa" id="Tempresa"  value="EmpresaPrivada"> Empresa Privada<br> 
  <label >Tipo de Acuerdo</label><br>
  <select  name="tipo_A" value="tipo_A">
  <option> Seleccionar un campo </option>
      <?php while($row = mysqli_fetch_assoc($resultadoC) ):  ?>
        <option <?php echo $tipo_A === $row['ID_T'] ?'selected': ''; ?> value="<?php echo $row['ID_T']; ?>"><?php echo $row ['N_Tipo']?> </option>
          <?php endwhile;?>
  </select><br>
  <label >Vigencia del Acuerdo</label><br>
  
  <input  type="date"  id= "Vigencia"  name="fecha_V" placeholder="Ejem. 07 de abril 2021" value="<?php echo $Vigencia?>"><br>
  <label>Testigo</label>
  <input  type="text"  id= "Testigo" name= "testigo" placeholder="Ejem. Lic Fernando Reyes Martinez" value="<?php echo $testigo?>"><br>
 
  <div class="btn-box">
  <input type="reset"  value="Limpiar">
  <input type= "submit" id="Antes5" value="Registrarse">
</div>
  </form>
  <dvi class ="step-row">
    <div id="progress"></div>
    <div class="step col"><small> Registro </small></div>
    <div class="step col"><small> Actividades</small></div>
    <div class="step col"><small> C</small></div>
    <div class="step col"><small> R</small></div>
    <div class="step col"><small> E</small></div>
  </div>
</dvi>
<script>
var Form1 = document.getElementById("Form1");
var Form2 = document.getElementById("Form2");
var Form3 = document.getElementById("Form3");
var Form4 = document.getElementById("Form4");
var Form5 = document.getElementById("Form5");
var Form6 = document.getElementById("Form6");

var antes1 = document.getElementById("antes1");
var antes2 = document.getElementById("antes2");
var antes3 = document.getElementById("antes3");
var antes4 = document.getElementById("antes4");
var antes5 = document.getElementById("antes5");
var antes6 = document.getElementById("antes6");
 
var progress = document.getElementById("progress");
antes1.onclick = function(){
  Form1.style.left = "-450";
  Form2.style.left = "-450";
  Form3.style.left = "-450";
  Form4.style.left = "-450";
  Form5.style.left = "-450";

}

</script>
  
 


</form>
      </body>
</html>