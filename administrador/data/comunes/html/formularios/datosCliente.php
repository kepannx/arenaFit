
              <div class="panel-heading nopaddingbottom">
                <h3> <i class="fa fa-shopping-cart"></i> Formulario de Pedido</h3>
                <div role="alert" style="" class="gritter-item-wrapper with-icon exclamation-circle send-o success mb10">
              <div class="gritter-item">
                <div class="gritter-without-image">
                  <span class="gritter-title"> Recuerda Esto <?php echo $consulta->filtroStrings($datosUser["nombres"],2); ?></span>
                  <p >Todos Los Pedidos estarán sujetos a revisión del administrador</p>
                </div>
                <div style="clear:both"></div>
              </div>
            </div><!-- gritter-item-wrapper -->




              </div>



              <div class="panel-body nopaddingtop">
                <hr>
                
              <h3><i class="fa fa-user"></i> Datos Del Cliente</h3>
              <p class="text-primary"> <i class="fa fa-bullhorn"></i> Estos datos me ayudarán a  hacer la factura del pedido, en caso que el cliente ya este en mi base de datos solo necesitas ingresar su número de identificación y yo llenaré el resto de datos, de no estarlo, no te preocupes, ingresa todos los datos que yo me encargaré en matricularlo <i class="fa fa-thumbs-up"></i></p>
              
              <hr>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">N-I-T o Cédula <span class="text-danger">*</span></label>
                    <div class="col-sm-4">
                      <input type="text" name="identificacion" id="identificacion" class="form-control" title="Necesito el nit o la cédula del cliente" placeholder="Necesito el nit o la cédula del cliente"" required />
                    </div>


                    <label class="col-sm-1 control-label">Régimen<span class="text-danger">*</span></label>
                    <div class="col-sm-5">
                      
                      <?php
                        $consulta->optionValueRegimen(NULL);
                      ?>
                    </div>
                  </div>



                  <div class="form-group">
                    <label class="col-sm-1 control-label">Nombre<span class="text-danger">*</span></label>
                    <div class="col-sm-4">
                      <input type="text" name="nombre" id="nombre"  class="form-control" title="¿Cómo se llama el cliente?" placeholder="¿Cómo se llama el cliente?"" required />
                    </div>

                   <label class="col-sm-1 control-label">Dirección Envío<span class="text-danger">*</span></label>
                    <div class="col-sm-6">
                      <input type="text" name="direccion"  id="direccion"  class="form-control" placeholder="¿Cuál es la dirección  donde llegará la mercancia?" required />
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-1 control-label">Ciudad<span class="text-danger">*</span></label>
                    <div class="col-sm-3">
                      <input type="text" name="ciudad" id="ciudad" class="form-control" placeholder="Dame un número de telefono para comunicarnos" required />
                    </div>

                    <label class="col-sm-1 control-label">Dpto<span class="text-danger">*</span></label>
                    <div class="col-sm-3">
                      <input type="text" name="departamento" class="form-control" placeholder="A qué departamento irá?" required />
                    </div>


                   <label class="col-sm-1 control-label">Teléfonos<span class="text-danger">*</span></label>
                    <div class="col-sm-3">
                      <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Dame un número de telefono para comunicarnos" required />
                    </div>
                  </div>



                   <div class="form-group">
                    <label class="col-sm-1 control-label">Email</label>
                    <div class="col-sm-3">
                      <input type="email" name="email" id="email" class="form-control"  placeholder="¿Cuál es el email del cliente?"/>
                    </div>

                   <label class="col-sm-2 control-label">Comentario</label>
                    <div class="col-sm-6">
                      <input type="text" name="comentario" class="form-control" placeholder="Quieres ingresar algun comentario?" required />
                    </div>
                  </div>
                  <input type="hidden" name="nuevoCliente" id="nuevoCliente" value="0">
                  <input type="hidden" name="regimenOld" id="regimenOld" value="no">
                  <hr>

                  
              </div><!-- panel-body -->

