<form action="" method="POST" id="card-form">
  <span class="card-errors"></span>
  <div class="form-row">
    <label>
      <span>Nombre del tarjetahabiente</span>
      <input type="text" size="20" data-conekta="card[name]"/>
    </label>
  </div>
  <div class="form-row">
    <label>
      <span>Número de tarjeta de crédito</span>
      <input type="text" size="20" data-conekta="card[number]"/>
    </label>
  </div>
  <div class="form-row">
    <label>
      <span>CVC</span>
      <input type="text" size="4" data-conekta="card[cvc]"/>
    </label>
  </div>
  <div class="form-row">
    <label>
      <span>Fecha de expiración (MM/AAAA)</span>
      <input type="text" size="2" data-conekta="card[exp_month]"/>
    </label>
    <span>/</span>
    <input type="text" size="4" data-conekta="card[exp_year]"/>
  </div>
  <button type="submit">¡Pagar ahora!</button>
</form>





<script type="text/javascript">
 
 // Conekta Public Key
 // Example Credit Card = 4242424242424242
  Conekta.setPublishableKey('<?php echo $this->conekta_public_key;?>');
 
 // ...
 
 $(function () {
  	$("#card-form").submit(function(event) {
    	var $form = $(this);

    	// Previene hacer submit más de una vez
    	$form.find("button").prop("disabled", true);
    	Conekta.token.create($form, conektaSuccessResponseHandler, conektaErrorResponseHandler);
   
    	// Previene que la información de la forma sea enviada al servidor
    	return false;
	});
  
  	var conektaSuccessResponseHandler = function(token) {
	  	var $form = $("#card-form");
	
	  	/* Inserta el token_id en la forma para que se envíe al servidor */
	  	$form.append($("<input type='hidden' name='conektaTokenId'>").val(token.id));
	 
	  	/* and submit */
	  	$form.get(0).submit();
	};
  
  	var conektaErrorResponseHandler = function(response) {
	  var $form = $("#card-form");
	  
	  /* Muestra los errores en la forma */
	  $form.find(".card-errors").text(response.message);
	  $form.find("button").prop("disabled", false);
	};
});


</script>



