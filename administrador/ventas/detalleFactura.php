<?php 
require('../data/libreria.lib/libreria.clases.php');
$datos=$_REQUEST;
extract($datos);
$validar=new validar();
$consulta= new consultas();
$ingreso= new ingresos();
$validar->validador($id);
$datosUser=mysql_fetch_array($consulta->sqlEmpleado($id));
$datosFactura=mysql_fetch_array($consulta->sqlFactura($f));
$datosCliente=mysql_fetch_array($consulta->sqlCliente($consulta->encrypt($datosFactura["idCliente"], publickey)));

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

  <div class="mainpanel" id="noPrint">

    <!--<div class="pageheader">
      <h2><i class="fa fa-home"></i> Dashboard</h2>
    </div>-->

    <div class="contentpanel">

      <div class="row">

        <div class="col-md-12 col-lg-12 dash-left">
          <div class="col-md-12">
            <div class="panel">
            
          <!-- Control de Envios-->
            <?php 
            
               require("../data/comunes/html/ventas/datosFactura.php");
            ?>
          <!-- Fin Control de Envios
          -->
       
          </div>

          <!-- panel -->
        
       
       
        </div>

    

        

      </div><!-- row -->

    </div><!-- contentpanel -->

  </div><!-- mainpanel -->

</section>


<?php
include("../data/comunes/js.php");
if ($datosFactura["estado"]==2) {
include("../data/comunes/html/ventas/abonos.php");
}
?>
<script src="js/auto.js"></script>

<script src="../scripts/ui/jquery-ui.min.js"></script>



</body>
</html>
