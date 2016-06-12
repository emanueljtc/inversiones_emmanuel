<?php
 $this->layout = 'p_login';
$pluginDot = empty($plugin) ? null : $plugin . '.';
?>

<p class="alert alert-danger">
	<button class="close" data-dismiss="alert">×</button>
	<strong><?php echo __d('cake_dev', 'Noticia: ¡¡¡Intentas acceder a un sitio no existente!!!'); ?> </strong>
	<!--<?php echo __d('cake_dev', 'If you want to customize this error message, create %s', APP_DIR . DS . 'View' . DS . 'Errors' . DS . 'missing_controller.ctp'); ?>-->
</p>
<meta http-equiv="refresh" content="5; url=http://localhost/inversiones_emmanuel/" />








<!-- <p class="alert alert-error">
	<button class="close" data-dismiss="alert">×</button>
	<strong><?php echo __d('cake_dev', 'Error'); ?>: </strong>
	<?php echo __d('cake_dev', '%s no pudo ser encontrado.', '<em>' . $pluginDot . $class . '</em>'); ?>
</p>
<p class="alert alert-error">
	<button class="close" data-dismiss="alert">×</button>
	<strong><?php echo __d('cake_dev', 'Error'); ?>: </strong>
	<?php echo __d('cake_dev', 'Cree la Clase %s a continuacion en el archivo: %s', '<em>' . $class . '</em>', (empty($plugin) ? APP_DIR . DS : CakePlugin::path($plugin)) . 'Controller' . DS . $class . '.php'); ?>
</p>
<pre>
&lt;?php
class <?php echo $class . ' extends ' . $plugin; ?>AppController {

}
</pre>
 <p class="alert alert-info">
	<button class="close" data-dismiss="alert">×</button>
	<strong><?php echo __d('cake_dev', 'Notice'); ?>: </strong>
	<?php echo __d('cake_dev', 'If you want to customize this error message, create %s', APP_DIR . DS . 'View' . DS . 'Errors' . DS . 'missing_controller.ctp'); ?>
</p>

<?php //echo $this->element('exception_stack_trace'); ?> -->
