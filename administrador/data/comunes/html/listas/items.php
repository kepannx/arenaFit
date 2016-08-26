<div class="panel">
        <div class="panel-heading">
          <h2 class="panel-title">Lista de Productos</h2>
          <p>Lista de todos los productos que hay en la base de datos</p>
        </div>
        <div class="panel-body">
          <?php
            $consulta->listaProductos($id);
          ?>
        </div>
      </div><!-- panel -->