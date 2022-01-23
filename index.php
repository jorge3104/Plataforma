<?php

session_start();
require_once 'includes/database.php';


if(!empty($_POST))
{
  if(empty($_POST['RFC']) || empty($_POST['contraseña']))
  {
    echo "<script>
              alert('INGRESE UN CORREO Y CONTRASEÑA');
              window.location = 'index.php';
              </script>";
    
    //$alert = 'Ingrese su correo y contraseña';

  }else{
 
        
      $usuario = $_POST['RFC'];
      $password =md5(mysqli_real_escape_string($mysqli, $_POST['contraseña']));
      

        $query = mysqli_query($mysqli, "SELECT  * FROM datos_e WHERE RFC_ID = '$usuario' AND contraseña = '$password'");
        $result = mysqli_num_rows($query);

    if($result > 0)
    {
     $data = mysqli_fetch_array($query);
   
  
     $_SESSION['usuario'] = $usuario;
     $_SESSION['contraseña'];
      header('Location: PantallaPu.php');
    }else{
      echo "<script>
              alert('Usuario o contraseña son incorrectas');
              window.location = 'index.php';
              </script>";

      }
      session_destroy();
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
<section id="principal">
<div class="izquierda">
  <div class="imagen1">
<img src="imagenes/Esc_Educ1.png"></div>
<h1>Tecnólogico Nacional de México
</h1>
<h2>
Instituto Tecnólogico de Tlalnepantla
</h2>
<h3>
Acuerdos de Colaboración </h3>
<img src="imagenes/ittla.png">

<p id="inf">
Gestion Tecnológica <br/> 
Oficina de Servicios Externos <br/> 
Lic. Dafne Viviana Varela Cano <br>
Tel 53-90-02-09 Ext 226
</p>
</div>
<div class="derecha">
    <div class="imagen2">
<img src="imagenes/Esc_Educ2.png"></div>
<p> <span class="diseño">Inicio de Sesión de Empresa</span> <p/>
<p><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="100" height="100" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <circle cx="9" cy="7" r="4" />
  <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
  <path d="M16 3.13a4 4 0 0 1 0 7.75" />
  <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
</svg>

<form method="POST" >
  <div class="row">
    <label for="inputEmail3" class="col-sm-2 col-form-label col-form-label-lg">RFC</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="RFC" require>
    </div>
  </div>
  <div class="row">
    <label for="inputPassword3" class="col-sm-2 col-form-label col-form-label-lg">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3"  name="contraseña" require>
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary" name="registro">Iniciar sesion</button>
</form>
<div class="OlvMan">
<a class="pg"  href = "#" >¿Olvidó su Contraseña? </a><br>
<a class="pg"  href = "#" >Manual de Usuario   </a><br>
</div>
<a class="pg" id="Registro" href="pruebaArc.php">Registrarse</button> </a>        

</div>
</section>

<!--<footer class="footer">
    <p> Desarrollado por <br/> Olivera Baez Karina <br/> Luna Martinez Jorge</p>
</footer>-->

</body>
</html>

