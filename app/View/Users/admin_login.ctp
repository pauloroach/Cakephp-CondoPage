<div class="login-box-body">
  <p class="login-box-msg">Por favor ingresa tus credenciales</p>

  <?php echo $this->Form->create('User', array('action' => 'admin_login')); ?>
    <div class="form-group has-feedback">
      <?php echo $this->Form->input('email', array('class' => 'form-control', 'placeholder' => 'Email', 'label' => false, 'div' => false)); ?>
      <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
      <?php echo $this->Form->input('password', array('class' => 'form-control', 'placeholder' => 'Contraseña', 'label' => false, 'div' => false)); ?>
      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
    <div class="row">
      <div class="col-xs-8">
        <div class="checkbox icheck">
          <label>
            <div class="icheckbox_square-blue" style="position: relative;" aria-checked="false" aria-disabled="false">
              <input type="checkbox" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;">
              <ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins>
            </div> Recordarme
          </label>
        </div>
      </div><!-- /.col -->
      <div class="col-xs-4">
        <button class="btn btn-primary btn-block btn-flat" type="submit">Entrar</button>
      </div><!-- /.col -->
    </div>
  <?php echo $this->Form->end(); ?>



  <a href="#">Olvide mi contraseña</a><br>
  <!--<a class="text-center" href="register.html">Register a new membership</a>-->

</div>
