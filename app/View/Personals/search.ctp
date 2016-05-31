<?php if($ajax != 1): ?>
  <h1>Buscar Personal</h1>
  <br>
  <div class="row">
    <?php echo $this->Form->create('Personal', array('type' => 'GET')); ?>

  <div class="col-sm-4">
    <?php echo $this->Form->input('search', array('label' => false, 'div' => false, 'class' => 'form-control', 'autocomplet' => 'off', 'value' => $search)); ?>
  </div>

  <div class="col-sm-3">
           <?php echo $this->Form->button('Buscar', array('div' => false, 'class' => 'btn btn-primary')); ?>
        </div>

        <?php echo $this->Form->end(); ?>

    </div>

    <br><br>
<?php endif; ?>
<?php if(!empty($search)):?>

    <?php if(!empty($personals)): ?>
        <div class="row">
            <?php foreach($personals as $personal): ?>
              <div class="col-sm-3">
                  <?php echo $this->Html->link($personal['Personal']['dni'], array('action' => 'view', $personal['Personal']['id'])); ?>
                  <br>
                  <?php echo $personal['Personal']['name'];?>
                  <br>
                  <?php echo $personal['Personal']['last_name'];?>
                  <br>
              </div>
            <?php endforeach; ?>
        </div>
        <br><br><br>
    <?php else: ?>
      <script>
         alert("NO SE ENCONTRO EL EMPLEADO");
      </script>


  <?php endif; ?>
<?php endif; ?>
