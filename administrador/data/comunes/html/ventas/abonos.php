<!-- Modal -->
<div class="modal bounceIn animated" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="" method="POST" >

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-calendar"></i>Cuánto piensas  abonar?</h4>
      </div>
      <div class="modal-body">
      <div class="col-md-12">
        <label>De cuanto va a ser el abono?</label>
          <input type="text" name="abono" class="form-control" style="font-size:30px; text-align:center" onkeyup="format(this)" onchange="format(this)" placeholder="Dime cuanto vas a abonar">
      </div>
      
      </div>
      <div class="modal-footer" align="center">
        <button type="submit" class="btn btn-primary"> <i class="fa fa-filter"></i>  Filtrame Esos Dias</button>
      </div>
    </div><!-- modal-content -->
    <input type="hidden" name="f" value="<?php echo $f; ?>">
</form>

  </div><!-- modal-dialog -->
</div><!-- modal -->