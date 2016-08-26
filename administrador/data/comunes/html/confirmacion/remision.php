<div class="panel-body nopaddingtop">
<form action="" method="POST" enctype="multipart/form-data">
<div class="row">
        <div class="col-md-12">
          <div class="panel">
            <div class="panel-heading">
              <h2> <i class="fa fa-file-text-o"></i> Factura</h2>

              <?php
                $consulta->avisos("aviso", "Asegurate que lo que esta abajo es lo que vas a  facturar realmente");
              ?>
        
            </div>
            <div class="panel-body">
              <div class="table-responsive">
                <table class="table table-bordered table-primary nomargin">
                  <thead>
                    <tr>
                      
                      <th>Producto</th>
                      <th class="text-center">Valor</th>
                      <th class="text-center">Cantidad</th>
                      <th class="text-center">Total</th>
                    </tr>
                  </thead>
                  <tbody>

                  <?php
                  $num=sizeof($itemName);
                  $control=0;
                  $suma=0;
                  while ($num>$control) {
                    # code...
                  
                  ?>
                    <tr>
                      <td ><?php echo $itemName[$control]; ?></td>
                      <input type="hidden" name="nombreArticulo[]" value="<?php echo $itemName[$control]; ?>">
                      <td class="text-center">$<?php echo number_format($price[$control]); ?></td>
                      <input type="hidden" name="valorUnidad[]" value="<?php echo $price[$control] ?>">
                      <td class="text-center"><?php echo $quantity[$control]; ?></td>
                      <input type="hidden" name="cantidad[]" value="<?php echo $quantity[$control]; ?>">
                      <td class="text-center">$<?php echo number_format($price[$control]*$quantity[$control]); ?></td>
                    </tr>

                  <?php 
                   $suma=$suma+($price[$control]*$quantity[$control]);
                    $control++;
                  } ?>
                    
                  </tbody>
                </table>
              </div><!-- table-responsive -->
            </div>
             <input type="hidden" name="confirmacion" value="1">
             <input type="hidden" name="id" value="<?php echo $id; ?>">
      </form>

          </div><!-- panel -->
        <div class="col-md-12">
          <h1 align="center" class="text-danger">Total a Pagar <i>$<?php echo number_format($suma) ?></i></h1>
          <input type="hidden" name="valorTotal" value="<?php echo $suma ?>">
        </div>





        <br>
        <div class="row">
            <div class="col-sm-9 col-sm-offset-3">
              <div class="col-md-6">
                 <input type="text" name="efectivo"  id="efectivo"  class="form-control" style="font-size:30px; text-align:center; color: #f00;  font-weight:bold" placeholder="Pagará Con $$"  onkeyup="format(this)" onchange="format(this)" />
              </div>
              <div class="col-md-6">
                <button type="submit" class="btn btn-wide btn-primary btn-quirk mr5"> <i class="fa  fa-file"></i> Pagar</button>

              </div>
              
            
            </div>
          </div>
        <hr>
        