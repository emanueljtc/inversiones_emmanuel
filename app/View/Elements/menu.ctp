<div class="collapse navbar-collapse navbar-ex1-collapse">

    <ul class="nav navbar-nav side-nav">
        <li class="header">MENU DE NAVEGACION</li>
        <li class="active">
            <?php echo $this->Html->link(__(' Inicio'), array('controller' => 'pages', 'action' => 'home'), array('class'=>'glyphicon glyphicon-home')); ?>
        </li>
        <li>
          <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="glyphicon glyphicon-user"></i> Personal <i class="glyphicon glyphicon-menu-down"></i></a>
          <ul id="demo" class="collapse">
              <li class="menu">
                  <?php echo $this->Html->link(__(' Personal Registrado'), array('controller' => 'personals', 'action' => 'index'), array('class'=>'glyphicon glyphicon-list')); ?>
              </li>
              <li class="menu">
                <?php echo $this->Html->link(__(' Nuevo Empleado'), array('controller' => 'personals', 'action' => 'add'), array('class'=>'glyphicon glyphicon-plus')); ?>
            </li>

          </ul>
        </li>
        <?php  if($current_user['group_id'] == '1'):?>
            <li>
              <a href="javascript:;" data-toggle="collapse" data-target="#demo2"><i class="glyphicon glyphicon-briefcase"></i> Cargo <i class="glyphicon glyphicon-menu-down"></i></a>
              <ul id="demo2" class="collapse">
                  <li class="menu">
                      <?php echo $this->Html->link(__(' Listado de Cargos'), array('controller' => 'positions', 'action' => 'index'), array('class'=>'glyphicon glyphicon-list')); ?>
                  </li>
                  <li class="menu">
                    <?php echo $this->Html->link(__(' Nuevo Cargo'), array('controller' => 'positions', 'action' => 'add'), array('class'=>'glyphicon glyphicon-plus')); ?>
                </li>
              </ul>
            </li>
      <?php endif; ?>
        <li>
          <a href="javascript:;" data-toggle="collapse" data-target="#demo3"><i class="glyphicon glyphicon-usd"></i> Salarios <i class="glyphicon glyphicon-menu-down"></i></a>
          <ul id="demo3" class="collapse">
              <li class="menu">
                  <?php echo $this->Html->link(__(' Listado de Salarios'), array('controller' => 'wakes', 'action' => 'index'), array('class'=>'glyphicon glyphicon-list')); ?>
              </li>
              <li class="menu">
                <?php echo $this->Html->link(__(' Nuevo Pago'), array('controller' => 'wakes', 'action' => 'add'), array('class'=>'glyphicon glyphicon-plus')); ?>
            </li>
          </ul>
        </li>
        <?php  if($current_user['group_id'] == '1'):?>
            <li>
              <a href="javascript:;" data-toggle="collapse" data-target="#demo4"><i class="glyphicon glyphicon-lock"></i> Usuarios <i class="glyphicon glyphicon-menu-down"></i></a>
              <ul id="demo4" class="collapse">
                  <li class="menu">
                      <?php echo $this->Html->link(__(' Listado de Usuarios'), array('controller' => 'users', 'action' => 'index'), array('class'=>'glyphicon glyphicon-list')); ?>
                  </li>
                  <li class="menu">
                    <?php echo $this->Html->link(__(' Nuevo Usuario'), array('controller' => 'users', 'action' => 'add'), array('class'=>'glyphicon glyphicon-plus')); ?>
                </li>
              </ul>
              <br>
            </li>
      <?php endif; ?>
          <?php echo $this->Form->create('Personal', array('type' => 'GET','class' => 'nav navbar-rigth', 'url' => array('controller' => 'personals', 'action' => 'search'))); ?>
											<div class="form-group">
												<?php echo  $this->Form->input('search',array('label'=> false, 'div' => false, 'id' => 's', 'class' => 'form-control s', 'placeholder' => 'Buscar Empleado...','list'=>'empleado','onkeypress'=>'return IsCedula(event);','maxlength'=>'10','required')); ?>
												<!--<select id="listap"></select>-->
												<datalist id="empleado"></datalist>
											</div>
											<center>
												<?php echo $this->Form->button('Buscar', array('div'=> false, 'class'=> 'btn btn-primary')) ?>
											</center>
										
											<?php echo $this->Form->end(); ?>




  </ul>

</div>
