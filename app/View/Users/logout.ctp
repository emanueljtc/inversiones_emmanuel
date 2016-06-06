<?php
    $this->layout = 'p_login';
    return $this->redirect($this->Auth->logout());
    echo $this->Session->flash('auth',array('class'=>'alert alert-dismissable alert-warning'));

?>
