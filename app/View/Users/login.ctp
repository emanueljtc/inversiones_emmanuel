<?php $this->layout = 'p_login'; ?>
 <div class="wrapper">


        <div class="form-signin">
          <marquee loop="1" SCROLLAMOUNT="25" behavior = "slide" direction="right">

              <h3 style="font-size:24">Inversiones Emmanuel 1108 A.C</h3>
              </marquee>
              <div class="col-xs-12">
                    <?php echo $this->Form->create('User'); ?>
                        <fieldset>

                            <?php
                              echo $this->Form->input('username',array('label'=>'Usuario','class'=>'form-control'));

                              echo $this->Form->input('password',array('label'=>'Contraseña','class'=>'form-control'));
                            ?>
                        </fieldset>

              </div>
              <br><br><br><br><br><br>
              <div class="col-xs-12">
                  <label class="checkbox">
                    <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Recuerdame
                  </label>
              </div>

                <button class="btn btn-lg btn-primary btn-block" type="submit">Acceder</button>



        </div>

</div>
