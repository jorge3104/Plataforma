<?php include 'headerFor.php';
require 'includes/database.php';
//validar que el fomulario no este vacio 

$errores = [];//arreglo ccon mensajes de errores

if($_SERVER['REQUEST_METHOD']=='POST'){

  //echo "<pre>";
 // var_dump($_POST);
  //echo "</pre>";

  $Correo = $_POST['Correo'];
  $Password = $_POST['password'];  
  
  $PasswordHasd = password_hash($Password,PASSWORD_BCRYPT);
//validar que el formulario no este vacio 
  if(!$Correo) {
    $errores[]='Debes añadir un Correo electronico';
    }
       if (!$Password){
      $errores[]= 'Debes Añadir una Contraseña';
      }
    
      //Revisar que no este vacio con empty 
if(empty($errores)) {
    
  //Insertar en base de datos
  $consulta="INSERT INTO datos_e (correo, contraseña) VALUES ('$Correo','${PasswordHasd}')";
   $resultado = mysqli_query($mysqli,$consulta);

if($resultado==$resultado){
  header ("location:FormularioRes.php");

}
 
}

}
?>

<?php foreach($errores as $error):?><!--muestra los mensajes de errores-->
<div class="alerta ">
<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-alert-triangle" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff4500" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M12 9v2m0 4v.01" />
  <path d="M5 19h14a2 2 0 0 0 1.84 -2.75l-7.1 -12.25a2 2 0 0 0 -3.5 0l-7.1 12.25a2 2 0 0 0 1.75 2.75" />
</svg><?php echo $error ?>
</div>
<?php endforeach; ?>



<div class="container-fluid">
<form class= "formulario" method="POST" action="LOGIN.php">
    <div class="formulario__campos">
<fieldset> 
<legend><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="140px" height="140px" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <circle cx="12" cy="7" r="4" />
  <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
</svg></legend>
<p>Crear una Cuenta</p>
<div class="campos">
<label>Correo Electronico</label>
<input class="campos_inp" type="Correo" name="Correo" placeholder="Correo Electronico">
<label>Contraseña </label>
<input class="campos_inp" type="password" name="password" maxlength="10" placeholder="Password" ><br>

</div>
<button class="siguiente" type="submit" name="enviar">
<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-big-right" width="50" height="50"  viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M4 9h8v-3.586a1 1 0 0 1 1.707 -.707l6.586 6.586a1 1 0 0 1 0 1.414l-6.586 6.586a1 1 0 0 1 -1.707 -.707v-3.586h-8a1 1 0 0 1 -1 -1v-4a1 1 0 0 1 1 -1z" />
</svg></button>
</div>
</div>
</form>






