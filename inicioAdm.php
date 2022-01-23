<?php
session_start();
require 'includes/database.php';

if(isset($_SESSION['usuario'])){
  header("Location: PantallaPAdm.php");
}

if(!empty($_SESSION['active'])){
  header("Location: PantallaPAdm.php");
}else{
  if(!empty($_POST))
  {
    if(empty($_POST['usuario']) || empty($_POST['contraseña']))
  {
    echo "<script> 
            alert('Favor de ingresar usuario y contraseña');
            window.locatios = 'index.php';
            </script>";
  }else{
 
  $usuario = mysqli_real_escape_string($mysqli, filter_var($_POST['usuario']) );
  $password =md5(mysqli_real_escape_string($mysqli, $_POST['contraseña']));
  
  $query =mysqli_query($mysqli, "SELECT * FROM registro WHERE Correo = '$usuario' AND contraseña = '$password'");
    $resultado = mysqli_num_rows($query);
    //var_dump($resultado);
    
    if ( $resultado > 0  ) {
  //revisar si el password es correcto
      $usuario = mysqli_fetch_assoc($query);
        
      
        //llenar el arreglo de la sesion
        $_SESSION['active'] = true;
        $_SESSION['usuario']= $usuario['Correo'];
        $_SESSION['contraseña']=$usuario['contraseña'];
        header("Location:PantallaPAdm.php");

       // echo "<pre>";
        //var_dump($_SESSION);
        //echo "</pre>";
      } else {
        echo "<script>
        alert('El Usuario o Contraseña son incorrectos');
        window.location = 'inicioAdm.php';
        </script>";
        

        }
  
  session_destroy();
    }
   
  
  }
  }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
   
     <link rel="preload" href="normalize.css">
    <link rel="stylesheet" href="normalize.css">
    <link href="estilos.css" rel= "stylesheet" >

    <title>Document</title>
</head>
<body>
<section id="Encabezado_L">
   <img src="imagenes/PantA.png" width="100%"  height="20%">
 
   </section>
<section id="Encabezado_le">
 
  <h3>Acuerdos de Colaboración</h3>
  <img src="imagenes/ittla.png">
</section>
<form method="POST" >
  <div class="row justify-content-center align-items-center vh--10">
    <label for="inputEmail3" class="col-sm-2  ">Correo</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputEmail3" name="usuario" require><br>
    </div>
  </div>
  <div class="row justify-content-center align-items-center vh--10">
    <label for="inputPassword3" class="col-sm-2 ">Password</label>
    <div class="col-sm-5">
      <input type="password" class="form-control" id="inputPassword3"  name="contraseña" require> <br>
    </div>
  </div>

<div class= "row justify-content-center align-items-center vh--10">
  <button type="submit" class="btn btn-primary w-25 ">Iniciar sesion</button>
  </div>
</form>
</div>
<!--<footer class="footer">
    <p> Desarrollado por <br/> Olivera Baez Karina <br/> Luna Martinez Jorge</p>
</footer>-->

</body>
</html>

</php>