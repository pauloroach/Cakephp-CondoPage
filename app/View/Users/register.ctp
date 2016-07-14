<br/>
<br/>
<br/>
<h1 class="side-title">Hola, bienvenido al registro de Pacifika Owners Club</h1>
<div class="tab-pane fadeInUp clearfix" id="booking-reservation">
  <div class="col-md-12">

    <h4>Para disfrutar de todos los beneficios que ofrece Pacifika Owners Club es necesario registrarse mediante el siguiente formulario:</h4>
    <p>Llena todos los campos con información veráz para que puedas acreditar tu cuenta, ya que nosotros verificaremos tus datos.</p>
    <p><span style="color:red;"<?php echo $this->Session->flash(); ?></span></p>
    <?php echo $this->Form->create('User'); ?>
    <div class="col-md-8">
      <br/>
      <div class="field-container">
        <?php echo $this->Form->input('email', array('class' => 'form-control required', 'placeholder' => 'Correo Electrónico', 'label' => false, 'div' => false, 'required' => 'required')); ?>
      </div>

      <div class="field-container">
        <?php echo $this->Form->input('password', array('class' => 'form-control', 'placeholder' => 'Contraseña', 'label' => false, 'div' => false, 'required' => 'required')); ?>
      </div>
      <div class="field-container">
        <?php echo $this->Form->input('confirm_password', array('class' => 'form-control', 'placeholder' => 'Repetir Contraseña', 'label' => false, 'div' => false, 'required' => 'required', 'type' => 'password')); ?>
      </div>
      <br/>
      <br/>
      <div class="field-container">
        <?php echo $this->Form->input('first_name', array('class' => 'form-control', 'placeholder' => 'Nombre', 'label' => false, 'div' => false, 'required' => 'required')); ?>
      </div>
      <div class="field-container">
        <?php echo $this->Form->input('last_name', array('class' => 'form-control', 'placeholder' => 'Apellidos', 'label' => false, 'div' => false, 'required' => 'required')); ?>
      </div>

      <div class="field-container">
        <?php echo $this->Form->input('address', array('class' => 'form-control', 'placeholder' => 'Dirección', 'label' => false, 'div' => false, 'required' => 'required')); ?>
      </div>
      <div class="field-container">
        <?php echo $this->Form->input('phone', array('class' => 'form-control', 'placeholder' => 'Teléfono', 'label' => false, 'div' => false, 'required' => 'required')); ?>
      </div>
      <div class="field-container">
        <?php echo $this->Form->input('cellphone', array('class' => 'form-control', 'placeholder' => 'Celular', 'label' => false, 'div' => false, 'required' => 'required')); ?>
      </div>
      <div class="field-container">
        <?php echo $this->Form->input('birthdate', array('class' => 'form-control datepicker-fields', 'placeholder' => 'Fecha de Nacimiento', 'label' => false, 'div' => false, 'required' => 'required')); ?>
      </div>
      <div class="field-container message-field">
        <?php echo $this->Form->input('city', array('class' => 'form-control', 'placeholder' => 'Ciudad', 'label' => false, 'div' => false, 'required' => 'required')); ?>
      </div>
      <div class="field-container">
        <div class="col-xs-1">
          <input type="checkbox" name="acepto" class="col-xs-12" style="width:25px;" required="required">
        </div>
        <div class="col-xs-11">
          <span style="margin-top:14px;" class="col-xs-12">Acepto los <a href="/terminos">términos y condiciones</a></span>
        </div>
        <div style="clear:both;"></div>
      </div>
      <div class="field-container" style="margin-top:15px;">
        <p>* Rellenar todos los campos</p>
      </div>
    </div>


      <div class="field-container btn-field col-sm-8 col-xs-12">
        <input type="submit" class="btn btn-default" value="Registarme"><!-- Payment Button -->
      </div>

    <?php echo $this->Form->end(); ?>
  </div>

  <!-- End of Guest Info form -->
</div>
