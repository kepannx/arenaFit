<!-- Modal -->
<div class="modal bounceIn animated" id="mySearch" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="" method="GET" >

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-search"></i> Selecciona Por Que Campo Lo Quieres Buscar</h4>
      </div>
      <div class="modal-body">
      <div class="col-md-6">
        <label>Parametro</label>
        <select name="campo" id="" class="form-control" required="" >
          <option value="">Selecciona uno</option>
          <option value="2">Por Identificación del Cliente</option>
          <option value="3">Por Número de Factura</option>
        </select>
      </div>
      <div class="col-md-6">
        <label>¿Dime Qué Búscas?</label>
        <input type="text" name="parametro" class="form-control" required>
      </div>
      </div>
      <div class="modal-footer" align="center">
        <button type="submit" class="btn btn-primary"> <i class="fa fa-filter"></i>Filtrame Estos Parámetros</button>
      </div>
    </div><!-- modal-content -->
    <input type="hidden" name="vector" value="4"> <!--Este vector me indica  que debo  filtrarlos por fecha -->
    <input type="hidden" name="id" value="<?php echo $id; ?>">
</form>

  </div><!-- modal-dialog -->
</div><!-- modal -->