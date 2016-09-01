        <div class="row row-col-join panel-earnings">
            <div class="col-xs-3 col-sm-4 col-lg-3">
              <div class="panel">
                <ul class="panel-options">
                  <li><a><i class="glyphicon glyphicon-option-vertical"></i></a></li>
                </ul>
                <div class="panel-heading">
                  <h4 class="panel-title">Hoy Has Registrado</h4>
                </div>
                <div class="panel-body">
                  <h3 class="earning-amount"><?php echo '$'.number_format($consulta->registroEnCajadelDia($vector)); ?></h3>
                  <h4 class="earning-today">En Efectivo</h4>

                  
                </div>
              </div><!-- panel -->
            </div>
            <div class="col-xs-9 col-sm-8 col-lg-9">
              <div class="panel">
                <div class="panel-heading">
                  <h4 class="panel-title">Tus ventas durante este mes</h4>
                </div>
                <div class="panel-body">
                  <div id="line-chart" class="body-chart"></div>
                </div>
              </div>
            </div>
          </div>