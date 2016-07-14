<?php
  echo $this->Session->flash();
  echo $this->Form->create('User');
?>
<p>Introduce to correo en el siguiente campo:</p>
<?php echo $this->Form->input('User.email');
echo $this->Form->end('Recuperar contraseña');?>
