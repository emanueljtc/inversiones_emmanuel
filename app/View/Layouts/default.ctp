<?php

$cakeDescription = __d('cake_dev', 'CakePHP');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php echo $this->Html->meta('icon'); ?>
		<title>
			->
			<?php echo $this->fetch('title'); ?>
		</title>
		<?php
	   /* Llamado de los CSS */

       	echo $this->Html->css(array('bootstrap.min.css'));
        echo $this->Html->css(array('sb-admin.css'));
        echo $this->Html->css(array('plugins/morris.css'));
        echo $this->Html->css(array('font-awesome.min.css'));
        echo $this->Html->css(array('jscal2.css'));
        echo $this->Html->css(array('border-radius.css'));
        echo $this->Html->css(array('gold/gold.css'));
				echo $this->Html->css(array('jquery-ui.min'));
				echo $this->Html->css(array('http://fonts.googleapis.com/css?family=Righteous'));


       /* -------------------------------------------*/
			 /* Llamado de los JS */

       echo $this->Html->script(array('jquery.js'));
			 echo $this->Html->script(array('bootstrap.min.js'));
			 echo $this->Html->script(array('jscal2.js'));
			 echo $this->Html->script(array('es.js'));
			 echo $this->Html->script(array('jquery-ui.min.js'));
			 echo $this->Html->script(array('search.js'));
			 echo $this->Html->script(array('plugins/morris/raphael.min.js'));
       echo $this->Html->script(array('plugins/morris/morris.min.js'));
       echo $this->Html->script(array('plugins/morris/morris-data.js'));
       echo $this->Html->script(array('validaciones.js'));



		?>
  </head>
	<body>
		<div id="wrapper">

				<!-- Navigation -->
				<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
								</button>
								<div id="logo" class="col-xs-12 col-sm-2">
									<?php echo $this->Html->link(__('S.R.C.P'), array('controller' => 'pages', 'action' => 'home')); ?>
									<!--<a href="index.html">S.R.C.P</a>-->
							 </div>
						</div>
						<!-- Top Menu Items -->
						<ul class="nav navbar-right top-nav">



								<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
										<ul class="dropdown-menu alert-dropdown">
												<li>
														<a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
												</li>
												<li>
														<a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
												</li>
												<li>
														<a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
												</li>
												<li>
														<a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
												</li>
												<li>
														<a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
												</li>
												<li>
														<a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
												</li>
												<li class="divider"></li>
												<li>
														<a href="#">View All</a>
												</li>
										</ul>
								</li>
								<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
										<ul class="dropdown-menu">
												<li>
														<a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
												</li>
												<li>
														<a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
												</li>
												<li>
														<a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
												</li>
												<li class="divider"></li>
												<li>
														<a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
												</li>
										</ul>
								</li>
						</ul>
						<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
						<div class="collapse navbar-collapse navbar-ex1-collapse">

								<ul class="nav navbar-nav side-nav">
										<li class="header">MENU DE NAVEGACION</li>
										<li class="active">
												<?php echo $this->Html->link(__(' Inicio'), array('controller' => 'pages', 'action' => 'index'), array('class'=>'glyphicon glyphicon-home')); ?>
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
						<!-- /.navbar-collapse -->
				</nav>

				<div id="page-wrapper">

						<div class="container-fluid">

								<!-- Page Heading -->

								<!-- /.row -->

								<div class="row">
										<div class="col-lg-12">
												 <!--<div class="alert alert-success fade in"> -->
														<!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> -->
														<!-- <i class="fa fa-info-circle"></i> -->

														<?php echo $this->Session->flash(); ?> <!--ALERTAS DE CAKE-->


										</div>
								</div>
								<!-- /.row -->

									  <div class="row">
														<div class="col-lg-12">
																<!--CONTENIDO DE CAKE-->
																<?php echo $this->fetch('content'); ?>
														</div>

										</div>
								</div>
								<!-- /.row -->

								<div class="row">
										<div class="col-lg-12">

										</div>
								</div>
								<!-- /.row -->

								<div class="row">
										<div class="col-lg-4">

										</div>
								</div>
										<div class="col-lg-4">

										</div>

								</div>
								<!-- /.row -->

						</div>
						<!-- /.container-fluid -->

				</div>
				<!-- /#page-wrapper -->

		</div>



</body>


</html>
