
<html>
    <head>
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <meta charset="utf-8">
          <?php echo $this->Html->meta('icon'); ?>
          <!--Llamado CSS-->
          <?php
          echo $this->Html->css(array('login.css'));
          echo $this->Html->css(array('bootstrap.min'));
          echo $this->Html->script(array('bootstrap.min.js'));
          echo $this->Html->script(array('jquery.min.js'));
          echo $this->Html->script(array('jquery.js'));
   			  ?>
          <title>->
          <?php echo $this->fetch('title'); ?>
          </title>
    </head>
  <body>
    <?php echo $this->Session->flash(); ?> <!--ALERTAS DE CAKE-->
    <?php echo $this->fetch('content'); ?>

  </body>
</html>
