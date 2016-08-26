<!-- Modal -->
<div class="modal bounceIn animated" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="" method="GET" >

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-calendar"></i> Selecciona El Rango de Fechas Que Quieres Consultar</h4>
      </div>
      <div class="modal-body">
      <div class="col-md-6">
        <label>Fecha Inicial</label>
        <input type="date" name="fecha1" class="form-control" required>
      </div>
      <div class="col-md-6">
        <label>Fecha Final</label>
        <input type="date" name="fecha2" class="form-control" required>
      </div>
      </div>
      <div class="modal-footer" align="center">
        <button type="submit" class="btn btn-primary"> <i class="fa fa-filter"></i>  Filtrame Esos Dias</button>
      </div>
    </div><!-- modal-content -->
    <input type="hidden" name="vector" value="3"> <!--Este vector me indica  que debo  filtrarlos por fecha -->
    <input type="hidden" name="id" value="<?php echo $id; ?>">
</form>

  </div><!-- modal-dialog -->
</div><!-- modal -->