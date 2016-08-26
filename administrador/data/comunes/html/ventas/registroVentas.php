<div class="panel-body nopaddingtop">
  
  <div class="col-md-12">
    <div class="col-md-6">
      <h2> <i class="fa fa-shopping-cart"></i> Mis Ventas</h2>
    </div>
    <div class="col-md-6" align="right" style="padding-top:10px;">

      <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        <i class="fa fa-list"></i>Ver Registro de Ventas Completo
      </button>
    </div>
<hr>    
  </div>
  


<h1 class="text-danger" align="center">Registro de las ventas de  hoy <?php echo $consulta->fechaHumana(date("Y-m-d", fechaActualFija)); ?></h1>

  <div class="col-md-12">
    
    <div class="col-md-6">
      <div class="btn btn-success" style="width:100%; font-size:20px;">
        <h4 class="panel-title" style="color:#fff;">Registro En Caja</h4>
        <?php echo '$'.number_format($consulta->registroEnCajadelDia($vector)); ?>
      </div>
    </div>


    <div class="col-md-6">
      <div class="btn btn-danger" style="width:100%; font-size:20px;">
        <h4 class="panel-title" style="color:#fff;">Lo que hay en registrado en crédito hoy</h4>
        $0
      </div>
    </div>

  </div>
    <br> 
      <?php
      if (!isset($vector)) {
        # code...
         $consulta->listaFacturasDia($id, 1);
      }
      else{
         $consulta->listaFacturasDia($id, $vector);
        }
      ?>
     
    <br>
<hr>
    

