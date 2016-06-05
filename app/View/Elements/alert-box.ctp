

  <div class="alert <?php echo $class;?>">
      <strong>Alerta: </strong><?php echo $message; ?>
      <a href="#" class="close" data-dismiss="alert" onclick="$(this).parent().fadeOut();return false;">&times;</a>
  </div>
