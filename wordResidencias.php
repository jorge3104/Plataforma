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

  //ESCRITURA
  $Numero_Esc = $_POST ['Numero_Esc'];
  $F_D = $_POST ['F_D'];
  $F_M = $_POST ['F_M'];
  $F_A = $_POST ['F_A'];
  $Otorgada = $_POST ['Otorgada'];
  $Notaria = $_POST ['Notaria'];
  $Entidad_Otor = $_POST ['Entidad_Otor'];
  $Reg_P = $_POST ['Reg_P'];
  $Folio = $_POST ['Folio_Mercantil'];
  $Actividades = $_POST ['Actividades'];
  
  //Representante
  $Numero_EscR = $_POST ['N_EscR'];
  $Dia_R = $_POST ['Dia_R'];
  $Mes_R =$_POST ['Mes_R'];
  $Año_R = $_POST ['Año_R'];
  $OtorgadaR = $_POST ['OtorgadaR'];
  $NotariaR = $_POST ['NotariaR'];
  $Calle_R = $_POST ['calle_R'];
  $numero_R = $_POST ['numero_R'];
  $colonia_R = $_POST ['colonia_R'];
  $municipio_R = $_POST ['Municipio_R'];
  $estado_R = $_POST ['estadoR'];
  $codigoR = $_POST ['CP_R'];

  //datos_a
  $Vigencia_I= $_POST ['fechaV_I'];
  $Vigencia_F=$_POST['fechaV_F'];
  $testigo = $_POST ['testigo'];
  $FolioA = $_POST ['FolioA'];

 



  $Acuerdo=$_POST ['T_A'];
  //$tipo_A=$_POST['tipo_A'];
  $TEmpresa=$_POST['TEmpresa'];

  if(isset($filas)) {
    //no repetir las empresas
 $sqlempresa = "SELECT FROM datos_e WHERE RFC_ID = '$RFC' AND  correo = '$Correo'";
   $resultadoR = $mysqli->query($sqlempresa);
   $filas=$resultadoR->num_rows;
   if($filas > 0){
     echo "<script>
           alert('El usuario o correo ya existe');
           window.location = 'index.php';
           </script>";
   }
     
   }else{
//Actuaizar Datosde la tabla dato_e
   $query = "UPDATE datos_e SET Nombre_E='$NombreE',Nombre_R='$Nombre_L',calle='$calle',numero='$numero',colonia='$colonia',munucipio='$municipio',Ent_F='$ent_F',C_P='$codigo',correo='$Correo',contraseña='$Password',Giro_Em='$Giro_Em' WHERE datos_e.RFC_ID = '$RFC'";
   $resultado1 = mysqli_query($mysqli,$query);

//INSERTA Datosde la tabla actividades
$query5 = "INSERT INTO  actividades (RFC_ID, D_A, Horario_E, Horario_S) VALUES ('$RFC', '$Desc_A', '$Horas_E', '$Horas_S')";
//$query5 ="INSERT INTO  actividades (D_A, Horario, Horario_E, Horario_S) VALUES ('$Desc_A', '$Horas_R', '$Horas_E', '$Horas_S')";
$resultado2 = mysqli_query($mysqli,$query5);
//INSERTA Datosde la tabla escritura
$query2 = "INSERT INTO escritura (RFC_ID, Numero_Esc, F_D, F_M, F_A, Otorgada, Notaria, Reg_P, Folio_Mercantil, Actividades)
VALUES ('$RFC', '$Numero_Esc', '$F_D', '$F_M', '$F_A', '$NombreE', '$Notaria', '$Reg_P', '$Folio', '$Actividades')";
$resultados = mysqli_query($mysqli,$query2);

//INSERTA Datosde la tabla representante_esc
$query3 = "INSERT INTO representantel_esc (RFC_ID, N_Esc, F_D, F_M, F_A, Otorgada, Notaria, Entidad_Otor, RFC, calle, numero, colonia, municipio, Ent_F,  C_P) 
VALUES ('$RFC', '$Numero_EscR', '$Dia_R','$Mes_R', '$Año_R', '$OtorgadaR', '$NotariaR','$Entidad_Otor', '$RFC', '$Calle_R', '$numero_R', '$colonia_R', '$municipio_R', '$estado_R', '$codigoR')";
$resultado4 = mysqli_query($mysqli,$query3); 


//INSERTA Datos de la tabla datos acuerdo
$query4 = "INSERT INTO acuerdo_a (RFC_ID, Folio, FechaV_Inicio, FechaV_Final, Testigo) VALUES ('$RFC', '$FolioA', '$Vigencia_I', '$Vigencia_F', '$testigo')";
$resultado5 = mysqli_query($mysqli,$query4);

$phpWord = new \PhpOffice\PhpWord\TemplateProcessor('Plantillas/Residencias_NUEVO ACUERDO.docx');


//agregamos las variables de las paltillas
$phpWord->setValue('NombreE',$NombreE);
$phpWord->setValue('Nombre_L',$Nombre_L);
$phpWord->setValue('Numero_Esc',$Nombre_Esc);
$phpWord->setValue('F_D',$F_D);
$phpWord->setValue('F_M',$F_M);
$phpWord->setValue('F_A',$F_A);
$phpWord->setValue('Otorgada',$Otorgada);
$phpWord->setValue('Notaria',$Notaria);
$phpWord->setValue('Reg_P',$Reg_P);
$phpWord->setValue('Folio',$Folio);
$phpWord->setValue('Actividades',$Actividades);
$phpWord->setValue('Numero_EscR',$Numero_EscR);
$phpWord->setValue('Dia_R',$Dia_R);
$phpWord->setValue('Mes_R',$Mes_R);
$phpWord->setValue('Año_R',$Año_R);
$phpWord->setValue('OtorgadaR',$OtorgadaR);
$phpWord->setValue('NotariaR',$NotariaR);
$phpWord->setValue('Entidad_Otor',$Entidad_Otor);
$phpWord->setValue('RFC',$RFC);
$phpWord->setValue('Calle_R',$Calle_R);
$phpWord->setValue('numero_R',$numero_R);
$phpWord->setValue('colonia_R',$colonia_R);
$phpWord->setValue('municipio_R',$municipio_R);
$phpWord->setValue('estado_R',$estado_R);
$phpWord->setValue('codigoR',$codigoR);
$phpWord->setValue('Vigencia_I',$Vigencia_I);
$phpWord->setValue('Vigencia_F',$Vigencia_F);
$phpWord->setValue('testigo',$testigo);






//Guardar el documento 
header('Context-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
header('Content-Disposition: attachnent; filename="Residencias_NUEVO ACUERDO.docx"');
$phpWord->saveAs("php://output");
}