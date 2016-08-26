<?php 
require('../data/libreria.lib/libreria.clases.php');
$datos=$_REQUEST;
extract($datos);
$validar=new validar();
$consulta= new consultas();
$validar->validador($id);
$ingresar= new ingresos();
$datosUser=mysql_fetch_array($consulta->sqlEmpleado($id));
$nombrePagina=nombreGeneral;
?>
<!DOCTYPE html>
<html lang="es">
<head>
<?php
  //get_required_files("data/comunes/headercode.php");
  require("../data/comunes/headercode.php");
  ?>
    <script type="text/javascript" src="js/ajax.js"></script>

  <script type="text/javascript" src="ajax/autocompletar.js"></script>
</head>

<body>

<!-- header-->

<?php
require("../data/comunes/header.php");
?>
<!-- fin header-->

<section>

  <!-- Menú Lateral-->
  <?php
    require("../data/comunes/menuLateral.php");
  ?>
  <!-- Fin del Menú Lateral-->

  <div class="mainpanel">

    <!--<div class="pageheader">
      <h2><i class="fa fa-home"></i> Dashboard</h2>
    </div>-->

    <div class="contentpanel">

      <div class="row">

        <div class="col-md-12 col-lg-12 dash-left">
          <div class="col-md-12">
            <div class="panel">
            <?php
              # code...
              require("../data/comunes/html/listas/items.php");
          ?>
        </div>
        
        <!-- Final del row-->



            </div>
          </div>
        
          <!-- panel -->
        
       
       
        </div>

    

       
      </div><!-- row -->

    </div><!-- contentpanel -->

  </div><!-- mainpanel -->

</section>


<?php
include("../data/comunes/js.php");
?>
<script src="js/auto.js"></script>

<script src="../scripts/ui/jquery-ui.min.js"></script>
</body>
</html>
