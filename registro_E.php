<?php include 'headerFor.php';



?>
<span class="titulo"><p>Formulario de Residencias Profesionales</p> </span>
<form class= "formulario" method="POST" action="registro_E.php">
    <div class="formulario__campos">
<fieldset>
   <p>DATOS DE LA EMPRESA</p>
<div class="campos">
<label> Nombre </label>
<input class="campos_inp" type= "text" name="Nombre" placeholder="Ejem. Intituto Tecnologico de Tlalnepantla">
<label>Representante Legal</label>
<input class="campos_inp" type="R_L" name="R_L" placeholder="Ejem. Lic. Eduardo Espinoza">
<label>Dirección </label>
<input class="campos_inp" type="text" name="Calle" placeholder="Av o Calle, Num"><br>
<input class="campos_inp" type="text" name="Colonia" placeholder="Colonia"><br>
<input class="campos_inp" type="test" name="Municipio" placeholder="Municipio"><br>
<label>Estado de la República</label>
  <select class="campos_inp" name="estado">
      <option value="no">Seleccione uno...</option>
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
<input class="campos_inp" type="number" name="C_P" placeholder="Codigo Postal"><br>
<label>Descripción de las actividades a desarrollar</label>
<textarea class="campos_inp" name="Actividades"></textarea>
<label>Giro de la Empresa</label>
<input class="campos_inp" type="G_E" name="G_E" placeholder="Giro de la Empresa"><br>
</div>
<input  class="boton_R" type="reset" value="Limpiar">
<input class="boton_R" type= "submit" value="Registrarse">

</div>
</fieldset>
</form>
