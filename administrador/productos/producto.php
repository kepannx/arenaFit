<?php 
require('../data/libreria.lib/libreria.clases.php');
$datos=$_REQUEST;
extract($datos);
$validar=new validar();
$consulta= new consultas();
$validar->validador($id);
$edito= new editar();
$datosUser=mysql_fetch_array($consulta->sqlEmpleado($id));
$datosArticulo=mysql_fetch_array($consulta->sqlItem($producto));
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
        <form class="form-horizontal" id="clientForm" method="POST">

        <div class="col-md-12 col-lg-12 dash-left">
          <div class="col-md-12">
            <div class="panel">
            <?php
            
            if (!isset($confirmacion)) {
              # code...
              require("../data/comunes/html/formularios/ingresoItems.php");
            }
            else
            {
              if ($confirmacion==0) {
                # los confirmo...
                require("../data/comunes/html/confirmacion/ingresoItems.php");
              }
              elseif ($confirmacion==1) {


                # ingreso los datos...
                if($edito->datosBasicosItem($datos)==1)
                {

                  $consulta->avisos("done", "Listo, ya edité  el producto a mi base de datos<br><br><a href='lista.php?id=".$id."'>¿Quieres ingresar uno nuevo?</a>");
                }
                else
                {
                    $consulta->avisos("error", "Ops! ocurrió un error, intentalo de nuevo, si el error  sigue llama al ingeniero");
                }
                
              }
              
            }
            


          ?>

          <!-- Control de Envios-->
        <?php

          if($confirmacion<1)
          {
        ?>
          <div class="row">
            <div class="col-sm-12" align="center">
              <button class="btn btn-wide btn-primary btn-quirk mr5"> <i class="fa fa-save"></i> Editalo</button>

            </div>
          </div>
          <!-- Fin Control de Envios
          -->

          <?php } ?>
        </div>
        
        <!-- Final del row-->



            </div>
          </div>

          <div class="row">
            <div class="col-sm-12" align="center">
              <button class="btn btn-wide btn-primary btn-quirk mr5"> <i class="fa fa-save"></i> Guargalos</button>

            </div>
          </div>
          </form>
        
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


</body>
</html>
