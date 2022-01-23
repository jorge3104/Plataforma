<?php
require_once "librerias/vendor/autoload.php";
require 'includes/database.php';
$errores = [];

  $NombreE = $_POST ['Nombre_E'];
  $Nombre_L = $_POST ['Nombre_L'];
  $RFC = $_POST ['RFC'];
  $calle = $_POST ['calle'];
  $numero = $_POST ['numero'];
  $colonia = $_POST ['colonia'];
  $municipio = $_POST['municipio'];
  $codigo = $_POST ['C_P'];
  $ent_F = $_POST ['ent_F'];
   $Giro_Em = $_POST ['Giro_Em'];
  $Correo = $_POST['Correo'];
  $Password = md5($_POST['password']); 

  
  //Desc. Actv
  $Desc_A = $_POST ['D_A'];
  $Total_H = $_POST ['Total_H'];
  $Horas_E = $_POST['Horas_E'];
  $Horas_S = $_POST['Horas_S'];

  
 



  $Acuerdo=$_POST ['T_A'];
  //$tipo_A=$_POST['tipo_A'];
  $TEmpresa=$_POST['TEmpresa'];

  if(isset($filas)) {
    //no repetir las empresas
 $sqlempresa = "SELECT ID_Datos FROM datos_e WHERE RFC_ID = '$RFC' AND  correo = '$Correo'";
   $resultadoR = $mysqli->query($sqlempresa);
   $filas=$resultadoR->num_rows;
   if($filas > 0){
     echo "<script>
           alert('El usuario o correo ya existe');
           window.location = 'index.php';
           </script>";
   }
     
   }else{

   

//Actualizar Datosde la tabla dato_e
$query = "UPDATE datos_e SET Nombre_E='$NombreE',Nombre_R='$Nombre_L',calle='$calle',numero='$numero',colonia='$colonia',munucipio='$municipio',Ent_F='$ent_F',C_P='$codigo',correo='$Correo',contraseña='$Password',Giro_Em='$Giro_Em' WHERE datos_e.RFC_ID = '$RFC'";
$resultado1 = mysqli_query($mysqli,$query);
;
//INSERTA Datosde la tabla actividades
$query5 = "INSERT INTO  actividades (RFC_ID, D_A, Horario_E, Horario_S) VALUES ('$RFC', '$Desc_A','$Horas_E', '$Horas_S')";
//$query5 ="INSERT INTO  actividades (D_A, Horario, Horario_E, Horario_S) VALUES ('$Desc_A', '$Horas_R', '$Horas_E', '$Horas_S')";
$resultado2 = mysqli_query($mysqli,$query5);

 



$phpWord = new \PhpOffice\PhpWord\TemplateProcessor('Plantillas/DualPublica.docx');


//agregamos las variables que se va agreagr a las paltillas
$phpWord->setValue('NombreE',$NombreE);
$phpWord->setValue('Nombre_L',$Nombre_L);
$phpWord->setValue('calle',$calle);
$phpWord->setValue('numero', $numero);
$phpWord->setValue('colonia',$colonia);
$phpWord->setValue('municipio',$municipio);
$phpWord->setValue('entidad_F',$ent_F);
$phpWord->setValue('C_P',$C_P);
$phpWord->setValue('Desc_A',$Desc_A);








//Guardar el documento 
header('Context-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
header('Content-Disposition: attachnent; filename="DualPublica.docx"');

$phpWord->saveAs("php://output");
}