
              

              <div class="panel-heading nopaddingbottom">

              <div class="alert alert-info" align="center">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <strong>Revisalo!</strong>Realmente estos son los valores que vas a ingresar?
              </div>
                <h3> <i class="fa fa-suitcase"></i> Ingreso de Productos</h3>
                <div role="alert" style="" class="gritter-item-wrapper with-icon exclamation-circle send-o success mb10">
              
              </div>
              <div class="panel-body nopaddingtop">
              <hr>
                  <div class="form-group">
                    <label class="col-sm-1 control-label">Producto<span class="text-danger">*</span></label>
                    <div class="col-sm-3">

                      <h3 class="text-danger"><?php echo $nombreArticulo; ?></h3>
                      <input type="hidden" name="nombreArticulo" value="<?php  echo $nombreArticulo; ?>">
                    </div>

                   <label class="col-sm-2 control-label">Valor Final<span class="text-danger">*</span></label>
                    <div class="col-sm-2">
                     <h3 class="text-danger"><?php echo $ventaFinal; ?></h3>
                      <input type="hidden" name="ventaFinal" value="<?php  echo $ventaFinal; ?>">
                      

                    </div>

                     <label class="col-sm-2 control-label">Valor Provedor<span class="text-danger">*</span></label>
                    <div class="col-sm-2">
                      <h3 class="text-danger"><?php echo $ventaProvedor; ?></h3>
                      <input type="hidden" name="ventaProvedor" value="<?php  echo $ventaProvedor; ?>">

                    </div>
                  </div>

                  <hr>
                  <input type="hidden" name="confirmacion" value="1">
                  <input type="hidden" name="idItem" value="<?php echo $idItem; ?>">
              </div><!-- panel-body -->

