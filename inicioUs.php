<?php
require 'includes/database.php';


$errores = [];

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  

  $email = mysqli_real_escape_string($mysqli, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) );
  $password =mysqli_real_escape_string($mysqli, $_POST['contraseña']);
  
  if(!$email){
    $errores[] = "El email es obligatorio";
  }
  if(!$password){
    $errores[] = "la contraseña es obligatoria";
  }

  if (empty($errores)){


    $query = "SELECT * FROM registro WHERE Correo = '${email}'";
    $resultado = mysqli_query($mysqli,$query);
    //var_dump($resultado);

    if ( $resultado->num_rows ) {
  //revisar si el passwor es correcto
      $usuario = mysqli_fetch_assoc($resultado);
      //var_dump($usuario);

      // verificar si es correcto o no contraseña
      $auth = password_verify($password,$usuario['contraseña'] );
      //var_dump($aut);
      if($auth) {
        //El usuario esta autenticado
        session_start();
        //llenar el arreglo de la sesion
        $_SESSION['usuario']= $usuario['Correo'];
        $_SESSION['login']=true;
        header("Location:PantallaPAdm.php");

       // echo "<pre>";
        //var_dump($_SESSION);
        //echo "</pre>";
      } else {
        $errores[]='la contraseña es incorrecta';
        

        }
    } else {
$errores[] = "El usuario no existe";
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
      <input type="Email" class="form-control" id="inputEmail3" name="email" require>
    </div>
  </div>
  <div class="row justify-content-center align-items-center vh--10">
    <label for="inputPassword3" class="col-sm-2 ">Password</label>
    <div class="col-sm-5">
      <input type="password" class="form-control" id="inputPassword3"  type="password" name="contraseña" require> <br>
    </div>
  </div>
  <?php foreach ($errores as $error): ?>
<div class="class">
<?php echo $error; ?>
</div>
<?php endforeach; ?>
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