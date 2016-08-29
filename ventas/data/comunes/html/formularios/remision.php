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

<div class="panel-body nopaddingtop">
<h2> <i class="fa fa-file-text-o"></i> Factura</h2>

    <br>

        <div class='row'>
          
      

          <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
            <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th width="2%"><input id="check_all" class="formcontrol" type="checkbox"/></th>
              <th width="38%">¿Qué le facturarás?</th>
              <th width="15%">Valor</th>
              <th width="15%">Cantidad</th>
              <th width="15%">Total</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><input class="case" type="checkbox"/><input type="hidden" data-type="productCode" name="itemNo[]" id="itemNo_1" class="form-control autocomplete_txt" autocomplete="off"></td>
              <td><input type="text" data-type="productName" name="itemName[]" id="itemName_1" class="form-control autocomplete_txt" autocomplete="off"></td>
              <td><input type="number" name="price[]" id="price_1" class="form-control changesNo" autocomplete="off" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;"></td>
              <td><input type="number" name="quantity[]" id="quantity_1" class="form-control changesNo" autocomplete="off" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;"></td>
              <td><input type="number" disabled="" name="total[]" id="total_1" class="form-control totalLinePrice" autocomplete="off" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;"></td>
            </tr>
          </tbody>
        </table>
          </div>
        </div>


        <div class='row'>
          <div class='col-xs-6'>
            <button class="btn btn-success addmore" type="button"> <i class="fa fa-plus-square"></i> Agregar Mas</button>
            <button class="btn btn-danger delete" type="button"> <i class="fa fa-minus-square"></i> Eliminar Filas</button>
          </div>
        
        <div class='col-xs-6'>
          <div class="form-group">
            <label>Subtotal: &nbsp;</label>
            <div class="input-group">
              <div class="input-group-addon">$</div>
              <input type="number" class="form-control" name="subTotal" id="subTotal" placeholder="Subtotal" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;">
            </div>
          </div>


          
          <div class="form-group">
            <label>Total: &nbsp;</label>
            <div class="input-group">
              <div class="input-group-addon">$</div>
              <input type="number" class="form-control" name="totalFinal" id="totalAftertax" placeholder="Total" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;">
            </div>
          </div>
          
      </div>
        <input type="hidden" name="confirmacion" value="0">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
 
        </div>
      
     



        <br>

         <div class="row">
        <div class="col-sm-12" align="center">
          <button class="btn btn-wide btn-primary btn-quirk mr5"> <i class="fa fa-save"></i> Guardalos</button>
        </div>
      </div>
        <hr>
        