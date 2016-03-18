<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('reset');
		echo $this->Html->css('text');
		echo $this->Html->css('grid');
		echo $this->Html->css('layout');
		echo $this->Html->css('nav');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div class="container_12">
			<div class="grid_12 header-repeat">
					<div id="branding">
							<div class="floatleft">
									<img src="img/logo.png" alt="Logo" /></div>
							<div class="floatright">
									<div class="floatleft">
											<img src="img/img-profile.jpg" alt="Profile Pic" /></div>
									<div class="floatleft marginleft10">
											<ul class="inline-ul floatleft">
													<li>Hello Admin</li>
													<li><a href="#">Config</a></li>
													<li><a href="#">Logout</a></li>
											</ul>
											<br />
											<span class="small grey">Last Login: 3 hours ago</span>
									</div>
							</div>
							<div class="clear">
							</div>
					</div>
			</div>
			<div class="clear">
			</div>
			<div class="grid_12">
					<ul class="nav main">
							<li><?php echo $this->Html->link(__(' Inicio'), array('controller' => 'pages', 'action' => 'home'),array('class'=>'ic-dashboard')); ?></li>
							<li class="ic-form-style"><a href="javascript:"><span>Controls</span></a>
									<ul>
											<li><a href="form-controls.html">Forms</a> </li>
											<li><a href="buttons.html">Buttons</a> </li>
											<li><a href="form-controls.html">Full Page Example</a> </li>
											<li><a href="table.html">Page with Sidebar Example</a> </li>
									</ul>
							</li>
							<li class="ic-typography"><a href="typography.html"><span>Typography</span></a></li>
			<li class="ic-charts"><a href="charts.html"><span>Charts & Graphs</span></a></li>
							<li class="ic-grid-tables"><a href="table.html"><span>Data Table</span></a></li>
							<li class="ic-gallery dd"><a href="javascript:"><span>Image Galleries</span></a>
								 <ul>
											<li><a href="image-gallery.html">Pretty Photo</a> </li>
											<li><a href="gallery-with-filter.html">Gallery with Filter</a> </li>
									</ul>
							</li>
							<li class="ic-notifications"><a href="notifications.html"><span>Notifications</span></a></li>

					</ul>
			</div>
			<div class="clear">
			</div>
			<div class="grid_2">
					<div class="box sidemenu">
							<div class="block" id="section-menu">
									<ul class="section menu">
											<li><a class="menuitem">Menu 1</a>
													<ul class="submenu">
															<li><a>Submenu 1</a> </li>
															<li><a>Submenu 2</a> </li>

													</ul>
											</li>
											<li><a class="menuitem">Menu 2</a>
													<ul class="submenu">
															<li><a>Submenu 1</a> </li>
															<li><a>Submenu 2</a> </li>
															<li><a>Submenu 3</a> </li>
															<li><a>Submenu 4</a> </li>
															<li><a>Submenu 5</a> </li>
													</ul>
											</li>
											<li><a class="menuitem">Menu 3</a>
													<ul class="submenu">
															<li><a>Submenu 1</a> </li>
															<li><a>Submenu 2</a> </li>
															<li><a>Submenu 3</a> </li>
															<li><a>Submenu 4</a> </li>
															<li><a>Submenu 5</a> </li>
															<li><a>Submenu 1</a> </li>
															<li><a>Submenu 2</a> </li>
															<li><a>Submenu 3</a> </li>
															<li><a>Submenu 4</a> </li>
															<li><a>Submenu 5</a> </li>
													</ul>
											</li>
											<li><a class="menuitem">Menu 4</a>
													<ul class="submenu">
															<li><a>Submenu 1</a> </li>
															<li><a>Submenu 2</a> </li>
															<li><a>Submenu 3</a> </li>
															<li><a>Submenu 4</a> </li>
															<li><a>Submenu 5</a> </li>
															<li><a>Submenu 6</a> </li>
															<li><a>Submenu 7</a> </li>
															<li><a>Submenu 8</a> </li>
															<li><a>Submenu 9</a> </li>
															<li><a>Submenu 10</a> </li>

													</ul>
											</li>
									</ul>
							</div>
					</div>
			</div>
			<div class="grid_10">
					<div class="box round first">

					</div>
					<div class="box round">
							<?php echo $this->fetch('content'); ?>
					</div>
			</div>
			<div class="grid_5">
					<div class="box round">
							<h2>
									Column on Left</h2>
							<div class="block">

							</div>
					</div>
			</div>
			<div class="grid_5">
					<div class="box round">
							<h2>
									Right Column</h2>
							<div class="block">

							</div>
					</div>
			</div>
			<div class="clear">
			</div>
	</div>
	<div class="clear">
	</div>
	<div id="site_info">
			<p>
					Copyright <a href="#">BlueWhale Admin</a>. All Rights Reserved.
			</p>
	</div>
</body>
</html>
