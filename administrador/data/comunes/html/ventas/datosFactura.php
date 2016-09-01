<div class="panel-body nopaddingtop">
  
  <div class="col-md-12">
      <div class="col-md-6">
        <h2> <i class="fa fa-check"></i> Datos de la Factura</h2>
      </div>
      <hr>    
  </div>
  <div class="col-md-12">
  </div>
  <br>   
    <h3><i class="fa fa-user"></i> Datos Del Cliente</h3>
    <hr>
            
      <div class="form-group">
         <label class="col-sm-2 control-label" style="margin-top:10px;">Identificación<span class="text-danger">*</span></label>
        <div class="col-sm-2">
           <h4 class="text-danger"><?php echo  $datosCliente["identificacion"]; ?></h4>
         </div>


        <label class="col-sm-1 control-label" style="margin-top:10px;">Nombre<span class="text-danger">*</span></label>
        <div class="col-sm-7">
            <h4 class="text-danger"><?php echo  $datosCliente["nombresApellidos"]; ?></h4>

        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label" style="margin-top:10px;">Teléfonos<span class="text-danger">*</span></label>
        <div class="col-sm-2">
            <h4 class="text-danger"><?php echo  $datosCliente["telefonos"]; ?></h4>
        </div>

      
       <label class="col-sm-1 control-label" style="margin-top:10px;">Email<span class="text-danger">*</span></label>
        <div class="col-sm-7">
           <h4 class="text-danger"><?php echo  $datosCliente["email"]; ?></h4>
        </div>
      </div>
      <hr>

  <div class="col-md-12">
      <hr>
      <h3><i class="fa fa-user"></i>Datos de la Facturación</h3>

      <div class="form-group">
         <label class="col-sm-2 control-label" style="margin-top:10px;">Nro Pedido<span class="text-danger">*</span></label>
        <div class="col-sm-1">
           <h4 class="text-danger"><?php echo  $datosFactura["nroPedido"]; ?></h4>
         </div>


        <label class="col-sm-1 control-label" style="margin-top:10px;">Fecha<span class="text-danger">*</span></label>
        <div class="col-sm-3">
            <h4 class="text-danger"><?php echo  $consulta->fechahumana(date("Y-m-d", $datosFactura["fechaPedido"])); ?></h4>
        </div>


        <label class="col-sm-2 control-label" style="margin-top:10px;">Valor Pedido<span class="text-danger">*</span></label>
        <div class="col-sm-3">
            <h4 class="text-danger"><?php echo  "$ ".number_format($datosFactura["valorPedido"]); ?></h4>
        </div>

      </div>



  <br><br>

      <div class="form-group">
        <?php if($datosFactura["estado"]==1 or $datosFactura["estado"]==0 ){

            $consulta->avisos("done", "Este pedido ya esta cancelado");

          }
          elseif ($datosFactura["estado"]==2) {
            # code...
            $consulta->avisos("error", "<i class='fa fa-warning'></i> Esta factura esta en crédito y aún no ha sido cancelada <h1 style='color:#fff'> Debe $ ".number_format($datosFactura["debe"])."</h1>");
            
            echo '<div class="col-md-12">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="width:100%  ">
                      <i class="fa fa-list"></i>Abonar a la Deuda
                    </button>
                  <hr>
                  </div>
                  
                  ';

          echo '

                  '.$consulta->listaDeAbonos($datosFactura["id"]).'
                ';

          }
          if (isset($abono)) {
            # code...
            
            $realizacionAbono=$consulta->abonos($f, $abono);
            if($realizacionAbono==1)
            {
              $consulta->avisos("done", "El abono se  realizó con exito");
            }
            else
            {
              $consulta->avisos("error", "No se puede abonar, ocurrio un error");
            }
          }
          ?>
      </div>


    <div class="col-md-12">
      <?php
        $consulta->factura($consulta->decrypt($f, publickey), 1);
      ?>
    </div>





  </div>         
            

</div><!-- panel-body -->
     
    <br>


  
