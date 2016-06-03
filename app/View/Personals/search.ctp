<div class="general">
  <div class="panel panel-primary">
        <?php if($ajax != 1): ?>
          <div class="panel-heading">
            <center>
            <h4>Buscar Personal</h4>
            </center>

          </div>
          <br>
          <center>
          <div class="from-horizontal">
            <?php echo $this->Form->create('Personal', array('type' => 'GET')); ?>
              <div class="from-group">

                        <div class="col-md-2 col-md-offset-5">

                            <?php echo $this->Form->input('search', array('label'=> false,'placeholder'=>'Ingrese Cedula','type'=>'text','onkeypress'=>'return IsCedula(event);','maxlength'=>'11', 'div' => false, 'class' => 'form-control', 'autocomplet' => 'off', 'value' => $search)); ?>


                        </div>
                        <br><br>
                        <?php echo $this->Form->button('Buscar', array('div' => false, 'class' => 'btn btn-primary')); ?>



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
              <p class="alert alert-warning">
              	<button class="close" data-dismiss="alert">×</button>
              	<strong><?php echo ('ALERTA: Empleado no Encontrado'); ?>. </strong>
              </p>


          <?php endif; ?>
        <?php endif; ?>
    </div>
</div>
