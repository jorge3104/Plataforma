<?php include 'headerFor.php';
require 'includes/database.php';


$Acuerdo=' ';
  //$tipo_A=$_POST['tipo_A'];
$TEmpresa='';
$RFC = ' ';

if (isset($_POST['boton'])) {

$Acuerdo=$_POST ['T_A'];
  //$tipo_A=$_POST['tipo_A'];
$TEmpresa=$_POST['TEmpresa'];
$RFC = $_POST ['RFC'];


$query = "INSERT INTO datos_e (RFC_ID, tipo_A, Tipo_E) VALUES
        ('$RFC','$Acuerdo', '$TEmpresa')";
        $resultado1 = mysqli_query($mysqli,$query);
        $RFC_insert = $mysqli->insert_id;

        $ruta = 'archivos/'.$RFC_insert.'/';
        $archivo = $ruta.$_FILES["archivo"]["name"];
        if(!file_exists($ruta)){
            mkdir($ruta);
        }
        if(!file_exists($archivo)){
            $procesar = @move_uploaded_file($_FILES["archivo"]["tmp_name"], $archivo);
        
        

        }
if ( $archivo!= ""){
    
        $query = "UPDATE datos_e SET ArchivoComprobante= '$archivo' WHERE datos_e.RFC_ID = '$RFC'";/*solo aplica para cargar el documento Sevicio con privada */
        $resultado2 = mysqli_query($mysqli,$query);
        

}
}

 
?>



<form class="fromulario-entrada" method="POST" action="menu.php" enctype="multipart/form-data">
<fieldset>
<label class="Mensj">Ingresar el RFC de la Empresa</label><br>
<input class="campos_entrada" type="text"  id= "RFC" name="RFC" pattern = ".{12}" title = "Favor verificar que sean 12 caracteres" maxlength="12"  onchange="mayusculas()" required ><br>
<script>
/* PARA HACER MAYUSCULAS EL TEXTO  */
function mayusculas() {
  const x = document.getElementById("RFC");
  x.value = x.value.toUpperCase();
}
</script>
<label class="Mensj" > Seleccionar el tipo de acuerdo que desea realizar</label><br>
<select  id="select"  class="form-select form-select-lg" name="T_A" required >
  <option value="no">Seleccionar una opción</option>
  <option value="Servicio">Servicio Social</option>
  <option value="Residencias">Residencias</option>
  <option value="EspecialidadDual">Especialidad Dual</option>
  </select><br><br>
  <div  id="secR">
    <label class="Mensj" >Seleccionar el tipo de empresa que es </label><br>
    <input class="form-check-input"  id= "T_P" type="radio" name="TEmpresa"   value="EmpresaPublica" onclick="publica()" />Empresa Pública <br>
    <input class="form-check-input"  id= "T_Pr" type="radio" name="TEmpresa"   value="EmpresaPrivada" onclick="privada()"/>  Empresa Privada<br> 
    <br>
  </div>
  <label class="Mensj" id="MT"></label><br>
  <input type="file" class="form-control" aria-label="file example" name="archivo" id="myFile" accept=".PDF" ><br>

    <?php if($Acuerdo ==='Servicio'):?>
    <?php  header("Location:FormularioServicio.php"); ?>

    <?php endif?>
    </div>
    <?php if( $TEmpresa === 'EmpresaPrivada' && $Acuerdo ==='EspecialidadDual'):?>
      <?php  header("Location:FormularioEDual.php"); ?>

    <?php endif?>

    <?php if( $TEmpresa ==='EmpresaPublica' && $Acuerdo ==='EspecialidadDual'):?>
    <?php  header("Location:FormularioEspPub.php"); ?> 

    <?php endif?>
    <?php if( $Acuerdo ==='Residencias'):?>
    <?php  header("Location:FormularioRes.php"); ?> 

    <?php endif?>
  <script>
        var TEmpresP = document.getElementById('T_P');
        var TEmpresPr = document.getElementById('T_Pr')
        var seleccionar = document.getElementById('select');
        var parrafo = document.getElementById('MT');
       

        TEmpresPr.addEventListener('onclick', privada);
        
        TEmpresP.addEventListener('onclick', publica);
        seleccionar.addEventListener('changue',privada);
  
  
    function privada() {
        
     let eleccion = seleccionar.value;
     let radio_R = TEmpresPr.value;
     

        if( radio_R == 'EmpresaPrivada' && eleccion == 'Servicio' ){
          
          parrafo.textContent = 'Como es una empresa privada necesitamos que compuebe que cumple con programas de asistencia social y desarrollo comunitaria';
   
       
     } else if (radio_R == 'EmpresaPrivada' && eleccion == 'EspecialidadDual'){
              
                document.getElementById("myFile").disabled = true;
     

     } else if (radio_R == 'EmpresaPrivada' && eleccion == 'Residencias'){
        document.getElementById("myFile").disabled = true;
 
     }

     }
    function publica() {
        let eleccion = seleccionar.value;
        let radio = TEmpresP.value;
        if( radio == 'EmpresaPublica' && eleccion == 'EspecialidadDual' ){
          
          
          document.getElementById("myFile").disabled = true;

       
        }else if (radio == 'EmpresaPublica' && eleccion == 'Residencias'){
        document.getElementById("myFile").disabled = true;
     

     } else if (radio == 'EmpresaPublica' && eleccion == 'Servicio'){
         document.getElementById("myFile").disabled = true
     }

    }
  </script>
<button type="submit" name="boton" class="btn btn-outline-success">Continuar</button>

</fieldset>
    
</form>








