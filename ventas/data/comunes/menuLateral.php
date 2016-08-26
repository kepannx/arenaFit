<div class="leftpanel">
    <div class="leftpanelinner">

      <!-- ################## LEFT PANEL PROFILE ################## -->

      <div class="media leftpanel-profile">
        <div class="media-left">
          <a href="#">
            <img src="<?php echo $validar->datospagina(5); ?>images/photos/loggeduser.png" alt="" class="media-object img-circle">
          </a>
        </div>
        <div class="media-body">
          <h4 class="media-heading"><?php echo $consulta->filtroStrings($datosUser["nombres"],2); ?> </h4>
          <span>Vendedor</span>
        </div>
      </div><!-- leftpanel-profile -->


      <div class="tab-content">

        <!-- ################# MAIN MENU ################### -->

        <div class="tab-pane active" id="mainmenu">
          <h5 class="sidebar-title" align="center"><i class="fa fa-list"></i> Menú de Navegación</h5>
          <ul class="nav nav-pills nav-stacked nav-quirk">
            <li><a href="<?php echo $validar->datospagina(5); ?>index.php?id=<?php echo $id; ?>"><i class="fa fa-home"></i> <span>Principal</span></a></li>

            <li class="nav-parent">
              <a href=""><i class="fa fa-check-square"></i> <span>Ventas y Pedidos</span></a>
              <ul class="children">
                <li><a href="<?php echo $validar->datospagina(5); ?>ventas/postTradicional.php?id=<?php echo $id; ?>">Post de Ventas</a></li>
                <li><a href="<?php echo $validar->datospagina(5); ?>ventas/tusVentas.php?id=<?php echo $id; ?>">Tus Ventas</a></li>
              </ul>
            </li>

            
            




          </ul>
        </div><!-- tab-pane -->

        
        

       


      </div><!-- tab-content -->

    </div><!-- leftpanelinner -->
  </div><!-- leftpanel -->