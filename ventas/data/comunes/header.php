<header>
  <div class="headerpanel" id="noPrint">

    <div class="logopanel">
    <a href="index.html"><img src="<?php echo $validar->datospagina(5); ?>images/logo.png" alt="My CashBox Vendedor" height="45"></a>
    </div><!-- logopanel -->

    <div class="headerbar">

      <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>

      

      <div class="header-right">
        <ul class="headermenu">
          <li>
            <div id="noticePanel" class="btn-group">
              <button class="btn btn-notice alert-notice" data-toggle="dropdown">
                <i class="fa fa-globe"></i>
              </button>
             
            </div>
          </li>
          <li>
            <div class="btn-group">
              <button type="button" class="btn btn-logged" data-toggle="dropdown">
                <img src="<?php echo $validar->datospagina(5); ?>images/photos/loggeduser.png" alt="" />
                <?php echo $consulta->filtroStrings($datosUser["nombres"],2); ?>
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu pull-right">

                <li><a href="signin.html"><i class="glyphicon glyphicon-log-out"></i>Salida Segura</a></li>
              </ul>
            </div>
          </li>
          
        </ul>
      </div><!-- header-right -->
    </div><!-- headerbar -->
  </div><!-- header-->
</header>