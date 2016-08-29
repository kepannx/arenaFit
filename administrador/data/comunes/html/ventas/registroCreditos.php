<div class="panel-body nopaddingtop">
  
  <div class="col-md-12">
    <div class="col-md-6">
      <h2> <i class="fa fa-credit-card"></i> Créditos</h2>
    </div>
    <div class="col-md-6" align="right" style="padding-top:10px;">

      <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        <i class="fa fa-list"></i>Ver Registro de Ventas Mas Amplio
      </button>
    </div>
<hr>    
  </div>
  


  <div class="col-md-12">
  </div>
    <br> 
      <?php
      if (!isset($vector)) {
        # code...
         $consulta->listaCreditos($id, 1);
      }
      else{
         $consulta->listaCreditos($id, $vector);
        }
      ?>
     
    <br>
<hr>
    

