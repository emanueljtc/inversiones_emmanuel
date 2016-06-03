<?php
  echo $this->Form->create('User', array('action' => 'login'));
  echo $this->Form->inputs(array(
      'legend' => __('Login'),
      'username',
      'password'
  ));
  echo $this->Form->end('Login');
?>
<!-- <div class="wrapper">
    <form class="form-signin">
      <h2 class="form-signin-heading">Inversiones Emmanuel</h2>
      <input type="text" class="form-control" name="username" placeholder="Nombre de Usuario" required="" autofocus="" />
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/>
      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Recuerdame
      </label>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Acceder</button>
    </form>
</div> -->
