
              <div class="panel-heading nopaddingbottom">
                <h3> <i class="fa fa-shopping-cart"></i> Formulario de Pedido</h3>
                <div role="alert" style="" class="gritter-item-wrapper with-icon exclamation-circle send-o success mb10">
              
              </div><!-- gritter-item-wrapper -->

              <div class="panel-body nopaddingtop">
                <hr>
                
              <h3><i class="fa fa-user"></i> Datos Del Cliente</h3>
            
              <hr>
            
                  <div class="form-group">
                    <label class="col-sm-1 control-label">Identificación<span class="text-danger">*</span></label>
                    <div class="col-sm-3">
                      <input type="number" min="0" name="identificacion" id="identificacion"  class="form-control"  placeholder="Cédula del cliente"" required />
                    </div>


                    <label class="col-sm-1 control-label">Nombre<span class="text-danger">*</span></label>
                    <div class="col-sm-7">
                      <input type="text" name="nombresApellidos" id="nombresApellidos"  class="form-control" title="¿Cómo se llama el cliente?" placeholder="¿Cómo se llama el cliente?"" required />
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-1 control-label">Teléfonos<span class="text-danger">*</span></label>
                    <div class="col-sm-3">
                      <input type="text" name="telefonos" id="telefonos" class="form-control" placeholder="Dame un número de telefono para comunicarnos" required />
                    </div>

      
                   <label class="col-sm-1 control-label">Email<span class="text-danger">*</span></label>
                    <div class="col-sm-7">
                      <input type="email" name="email" id="email" class="form-control" placeholder="Cuál es el correo electrónico del cliente" />
                    </div>
                  </div>

                  <input type="hidden" name="nuevoCliente" id="nuevoCliente" value="0">
                  <hr>

                  
              </div><!-- panel-body -->

