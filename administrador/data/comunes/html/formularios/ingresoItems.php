
              <div class="panel-heading nopaddingbottom">
                <h3> <i class="fa fa-suitcase"></i> Ingreso de Productos</h3>
                <div role="alert" style="" class="gritter-item-wrapper with-icon exclamation-circle send-o success mb10">
              
              </div>
              <div class="panel-body nopaddingtop">
              <hr>

                  <div class="form-group">
                    <label class="col-sm-1 control-label">Producto<span class="text-danger">*</span></label>
                    <div class="col-sm-3">
                      <input type="text" name="nombreArticulo" id="nombreArticulo" value="<?php echo $datosArticulo["nombreArticulo"]; ?>"  class="form-control" placeholder="¿Cuál es el nombre del producto?" required />
                    </div>

                   <label class="col-sm-2 control-label">Valor Final<span class="text-danger">*</span></label>
                    <div class="col-sm-2">
                      <input type="text" name="ventaFinal"  id="ventaFinal" value="<?php echo $datosArticulo["ventaFinal"]; ?>"  class="form-control" placeholder="¿Cuál es la dirección  donde llegará la mercancia?" required  onkeyup="format(this)" onchange="format(this)" />
                    </div>

                     <label class="col-sm-2 control-label">Valor Provedor<span class="text-danger">*</span></label>
                    <div class="col-sm-2">
                      <input type="text" name="ventaProvedor"  id="ventaProvedor"  value="<?php echo $datosArticulo["ventaProvedor"]; ?>" class="form-control" placeholder="Venta a Mayorista"  onkeyup="format(this)" onchange="format(this)" />
                    </div>
                  </div>

                  <hr>
                  <input type="hidden" name="confirmacion" value="0">
                  <input type="hidden" name="id" value="<?php  echo $id; ?>">
                  <input type="hidden" name="idItem" value="<?php echo $consulta->encrypt($datosArticulo["id"] ,publickey) ?>">
              </div><!-- panel-body -->

