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

       	echo $this->Html->css(array('bootstrap.min'));
        echo $this->Html->css(array('sb-admin.css'));
        echo $this->Html->css(array('plugins/morris.css'));
        echo $this->Html->css(array('font-awesome.min.css'));
        echo $this->Html->css(array('jscal2.css'));
        echo $this->Html->css(array('border-radius.css'));
        echo $this->Html->css(array('gold/gold.css'));
				echo $this->Html->css(array('jquery-ui.min'));
				echo $this->Html->css(array('http://fonts.googleapis.com/css?family=Righteous'));
				echo $this->Html->css(array('style'));

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
										<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user">
										</i>
									<?php	echo $this->Session->read('Auth.User.fullname')?>

										<b class="caret">

										</b></a>
										<ul class="dropdown-menu">
												<li>
														<a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
												</li>
												<?php  if($current_user['group_id'] == '1'):?>
														<li>
																<a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
														</li>
												<?php endif; ?>
												<li class="divider"></li>
												<li>
														<a href="http://localhost/inversiones_emmanuel/users/logout"><i class="fa fa-fw fa-power-off"></i> Salir</a>
												</li>
										</ul>
								</li>
						</ul>
						<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
							<?php echo $this->element('menu'); ?>
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
														<!--<?php echo debug($current_user);  ?>-->
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
