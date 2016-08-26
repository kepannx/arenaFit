<?php 
require('../data/libreria.lib/libreria.clases.php');
$datos=$_REQUEST;
extract($datos);
$validar=new validar();
$consulta= new consultas();
$ingreso= new ingresos();
$validar->validador($id);
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

  <div class="mainpanel" id="noPrint">

    <!--<div class="pageheader">
      <h2><i class="fa fa-home"></i> Dashboard</h2>
    </div>-->

    <div class="contentpanel">

      <div class="row">
        <form class="form-horizontal" id="clientForm">

        <div class="col-md-12 col-lg-12 dash-left">
          <div class="col-md-12">
            <div class="panel">
            <form action="" method="POST" enctype="multipart/form-data">
            <?php
              

              //require("../data/comunes/html/formularios/datosCliente.php");
              if (!isset($confirmacion)) {
                # code...
                require("../data/comunes/html/formularios/remision.php");
              }
              else
              {
                if ($confirmacion==0) {
                  # code...
                    //CONFIRMAR FACTURA
                    //echo "confirmame";
                    require("../data/comunes/html/confirmacion/remision.php");
                }
                elseif ($confirmacion==1) {
                  # code...
                  //FACTURAR
                  $idPedido=$ingreso->ingresarPedidos($datos);
                  if (intval($idPedido)>0) {
                    # code...
                    
                    echo '<div class="col-md-12" id="noPrint">
          <h1 align="center" class="text-danger">
                Asegurate de Devolverle $ '.number_format($consulta->consultaDevuelta($valorTotal, $efectivo)).'
          </h1></div>';


                    $consulta->factura($idPedido, 1); //1:media carta  2:tirilla
                     ?>
                     <br><br>
                     <div class="col-md-12" align="center">
                   <div class="btn-group" id="noPrint" >
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="fa fa-print"></i>¿Quieres Imprimir La Orden?
                              <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                              <li>
                                 <a href="javascript:;" class="btn-lg btn-block" data-toggle="modal" data-target=".bs-modal-md-print" >Si, Imprimela en Media Carta</a>
                              </li>
                              <li>
                                <a href="javascript:;" class="btn btn-lg btn-block" data-toggle="modal" data-target=".bs-modal-lg" >Si, Imprimela en Tirilla</a>

                              </li>
                            </ul>
                          </div>
              <br><hr>
                </div>

                     <?php 
                  }
                  else
                  {
                      echo "ops";
                  }

                }
              }
              

          ?>


          <div class="row">
            <div class="col-sm-12" align="center">
              <button class="btn btn-wide btn-primary btn-quirk mr5"> <i class="fa fa-save"></i> Guargalos</button>

            </div>
          </div>
             </form>
          <!-- Control de Envios-->
          
          <!-- Fin Control de Envios
          -->
        </div>
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
<?php include("../scripts/ajax/ajaxInvoice.php");
  if ($confirmacion==1) {
    # code...
    require("../data/comunes/html/invoice/printLetter.php");
  }

?>


</body>
</html>
