            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Relatórios</h3>
                <ul class="nav side-menu">
                  <li><a href="<?= BASE_URL() ?>admin/home"><i class="fa fa-home"></i> Início <span class="label label-success pull-right"></span></a></li>
                  <!-- <li><a href="#"><i class="fa fa-bar-chart-o"></i> Dashboards <span class="label label-success pull-right"></span></a></li> -->
                </ul>
              </div>

              <div class="menu_section">
                <h3>CADASTROS</h3>
                <ul class="nav side-menu">

                  <li><a href="<?= BASE_URL() ?>admin/admin/pagina_cadastro_usuario"><i class="fa fa-users"></i> Usuários <span class="label label-success pull-right"></span></a></li>
                  
                  <li><a><i class="fa fa-database"></i> Dados <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= BASE_URL() ?>admin/admin/pagina_cadastro_estilo">Estilo</a></li>
                      <li><a href="<?= BASE_URL() ?>admin/admin/pagina_cadastro_desenvolvedora_distribuidora">Desenvolvedora/Distribuidora</a></li>
                    </ul>
                  </li>
                  
                </ul>
              </div>

              <!-- <div class="menu_section">
                <h3>ADMINISTRATIVO</h3>
                <ul class="nav side-menu">
                  <li><a href="<?php BASE_URL()?>#"><i class="fa fa-tag"></i> Chamados <span class="label label-success pull-right"></span></a></li>
                </ul>
              </div> -->
            </div>
            <!-- /sidebar menu -->

          </div>
        </div>