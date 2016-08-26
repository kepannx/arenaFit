<?php 
require('data/libreria.lib/libreria.clases.php');
$datos=$_REQUEST;
extract($datos);
$validar=new validar();
$consulta= new consultas();
$validar->validador($id);
$datosUser=mysql_fetch_array($consulta->sqlEmpleado($id));
$nombrePagina=nombreGeneral;
?>
<!DOCTYPE html>
<html lang="es">
<head>
<?php
  //get_required_files("data/comunes/headercode.php");
  require("data/comunes/headercode.php");
  ?>
  
</head>

<body>

<!-- header-->

<?php
require("data/comunes/header.php");
?>
<!-- fin header-->

<section>

  <!-- Menú Lateral-->
  <?php
    require("data/comunes/menuLateral.php");
  ?>
  <!-- Fin del Menú Lateral-->

  <div class="mainpanel">

    <!--<div class="pageheader">
      <h2><i class="fa fa-home"></i> Dashboard</h2>
    </div>-->

    <div class="contentpanel">

      <div class="row">
        
        <div class="col-md-12 col-lg-8 dash-left">
          <!-- panel -->

       

        <?php
        require("data/comunes/menuRapidoNavegacion.php");
      ?>
            
       

        <!-- Fin Widgets-->
          








          

        </div><!-- col-md-9 -->
        

          

        </div><!-- col-md-3 -->
      </div><!-- row -->

    </div><!-- contentpanel -->

  </div><!-- mainpanel -->

</section>


<?php
include("data/comunes/js.php");
?>



</body>
</html>
