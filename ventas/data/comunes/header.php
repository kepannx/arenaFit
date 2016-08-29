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
              <div id="noticeDropdown" class="dropdown-menu dm-notice pull-right">
                <div role="tabpanel">
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs nav-justified" role="tablist">
                    <li class="active"><a data-target="#notification" data-toggle="tab">Notificaciones</a></li>
                  </ul>

                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="notification">
                      <ul class="list-group notice-list">
                        <li class="list-group-item unread">
                          <div class="row">
                            <div class="col-xs-2">
                              <i class="fa fa-envelope"></i>
                            </div>
                            <div class="col-xs-10">
                              <h5><a href="">Mensaje de Rolman Segura</a></h5>
                              <small>Junio 20, 2016</small>
                              <span>El pedido que se hizo para  der...</span>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item unread">
                          <div class="row">
                            <div class="col-xs-2">
                              <i class="fa fa-user"></i>
                            </div>
                            <div class="col-xs-10">
                              <h5><a href="">Mensaje de Diego Perez</a></h5>
                              <small>Junio 18, 2016</small>
                              <span>Ayer entregue la mercanc...</span>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item">
                          <div class="row">
                            <div class="col-xs-2">
                              <i class="fa fa-user"></i>
                            </div>
                            <div class="col-xs-10">
                              <h5><a href="">Mensaje de Rolman Segura</a></h5>
                              <small>Junio 17, 2016</small>
                              <span>Debes Revisar el pedido d..</span>
                            </div>
                          </div>
                        </li>
                        
                      
                      </ul>
                      <a class="btn-more" href="">¿Quieres Ver Todos Los Mensajes?<i class="fa fa-long-arrow-right"></i></a>
                    </div><!-- tab-pane -->

                   
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="btn-group">
              <button type="button" class="btn btn-logged" data-toggle="dropdown">
                <img src="<?php echo $validar->datospagina(5); ?>images/photos/loggeduser.png" alt="" />
                <?php echo $consulta->filtroStrings($datosUser["nombre"],2); ?>
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