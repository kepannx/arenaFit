<?php
require('data/libreria.lib/libreria.clases.php');
$datos=$_REQUEST;
extract($_REQUEST);
if(isset($usuario))
  { 
    $validar=new validar();
    $validar->administrador($datos);
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <!--<link rel="shortcut icon" href="../images/favicon.png" type="image/png">-->

  <title>My Cash Box, Vendedores</title>


  <link rel="stylesheet" href="css/quirk.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="../lib/html5shiv/html5shiv.js"></script>
  <script src="../lib/respond/respond.src.js"></script>
  <![endif]-->
</head>

<body class="signwrapper">

  <div class="sign-overlay"></div>
  <div class="signpanel"></div>

  <div class="panel signin">
    <div class="panel-heading">
     <img src="img/logo.png" alt="My Cash Box Vendedores">
      <h4 class="panel-title">Hola! Que bueno tenerte de regreso</h4>
    </div>
    <div class="panel-body">
      <form action="" method="POST">
        <div class="form-group mb10">
          <div class="input-group">
            <span class="input-group-addon"></span>
            <input type="text" name="usuario" class="form-control" placeholder="Necesito tu usuario por favor">
          </div>
        </div>
        <div class="form-group nomargin">
          <div class="input-group">
            <span class="input-group-addon"></span>
            <input type="password" name="contrasena" class="form-control" placeholder="Y ahora tu contraseña">
          </div>
        </div>
        <div><a href="" class="forgot">Olvidaste tu contraseña?</a></div>
        <div class="form-group">
          <button type="submit" class="btn btn-success btn-quirk btn-block">Listo! Ingresa</button>
        </div>
      </form>
    </div>
  </div><!-- panel -->

</body>
</html>
