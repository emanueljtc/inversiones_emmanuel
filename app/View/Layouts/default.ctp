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
     	echo $this->Html->css(array('plugins/bootstrap/bootstrap.css'));
       	echo $this->Html->css(array('bootstrap.min'));
        echo $this->Html->css(array('plugins/jquery-ui/jquery-ui.min.css'));
        echo $this->Html->css(array('style.css'));
        echo $this->Html->css(array('hover.css'));
      	echo $this->Html->css(array('style-desktop'));
       	echo $this->Html->css(array('style-wide.css'));
       	echo $this->Html->css(array('style-wide.css'));
       /* -------------------------------------------*/
       echo $this->Html->script(array('bootstrap.min'));
       echo $this->Html->script(array('jquery.min'));
       echo $this->Html->script(array('skel.min'));
       echo $this->Html->script(array('skel-layers.min'));
       echo $this->Html->script(array('init.js'));
       echo $this->Html->script(array('docs.min.js'));



		?>
  </head>
<body class="left-sidebar">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Content -->
					<div id="content">
						<div class="inner">

							<!-- Post -->
							<center>
								<article class="box post post-excerpt">


									<?php echo $this->Session->flash(); ?>
									<?php echo $this->fetch('content'); ?>

								</article>
							</center>

							<!-- Post -->



						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">

						<!-- Logo -->
							<h1 id="logo"><marquee loop="1" SCROLLAMOUNT="7" behavior = "slide" direction="up"><img src="/arte_cristal/app/webroot/img/logo.png" alt="Alcaldia del Estado Guárico" width="189" height="135"></marquee></h1>


						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li >
									<?php echo $this->Html->link(__(' Inicio'), array('controller' => 'pages', 'action' => 'home')); ?>
									</li>

									<li>
									<?php echo $this->Html->link(__('Usuarios'), array('controller' => 'users', 'action' => 'index')); ?>
									</li>
									<li >
									<?php echo $this->Html->link(__('Documentos'), array('controller' => 'documentos', 'action' => 'index')); ?>
									</li>
									<!--<li>
										<A HREF="http://localhost/alcaldia2/solvencias">Solvencias</A>


									</li>-->
									<li >
									<?php echo $this->Html->link(__(' Solvencias'), array('controller' => 'solvencias', 'action' => 'index')); ?>
									</li>

									<li>
									<?php echo $this->Html->link(__('Instituciones'), array('controller' => 'instituciones', 'action' => 'index')); ?>
									</li>
									<!-- <li>
									<A HREF="http://localhost/alcaldia2/estadisticas">Estadisticas</A>
									</li> -->
									<li>
									<?php echo $this->Html->link(__('Estadisticas'), array('controller' => 'estadisticas', 'action' => 'index')); ?>
									</li>
									<li>
									<?php echo $this->Html->link(__('Salir'), array('controller' => 'users', 'action' => 'logout')); ?>
									</li>
								</ul>

							</nav>


							<!-- Search -->
								<section class="box search">
								<form method="post" action="documentos">
									<input type="text" class="text" name="buscar" placeholder="Buscar por Cedula" />
								</form>
							</section>
					<!-- Creado -->
							<ul id="copyright">
								<li>&copy; Creado por :</li><li><a href="">Diana Tovar & Maryelis Ache</a></li>
							</ul>

					</div>

			</div>

	</body>


</html>
