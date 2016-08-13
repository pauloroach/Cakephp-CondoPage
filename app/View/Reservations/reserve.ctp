<h1>Reservacion de Suite</h1>
<p>Ya solo estas a un paso de completar tu reservación, pero antes quisieramos saber si desearías agregar alguna de estas opciones a tu reservación</p>
<form action="/reservations/reserve" class="booking-form clearfix"><!-- Do Not remove the classes -->
  <div class="col-xs-12">
    <h4>Formulario de registro</h4>
    <div class="col-xs-12">
      <div class="form-group">
        <label>Nombre completo</label>
        <input type="text" class="form-control" name="name" placeholder="">
      </div>
    </div>
    <div class="col-xs-8">
      <div class="form-group">
        <label>Domicilio</label>
        <input type="text" class="form-control" name="street1" placeholder="">
      </div>
    </div>
    <div class="col-xs-4">
      <div class="form-group">
        <label>Codigo Postal</label>
        <input type="text" class="form-control" name="zip" placeholder="">
      </div>
    </div>
    <div class="col-xs-6">
      <div class="form-group">
        <label>Ciudad</label>
        <input type="text" class="form-control" name="city" placeholder="">
      </div>
    </div>
    <div class="col-xs-6">
      <div class="form-group">
        <label>Estado</label>
        <input type="text" class="form-control" name="state" placeholder="">
      </div>
    </div>
    <div class="col-xs-6">
      <div class="form-group">
        <label>Teléfono</label>
        <input type="text" class="form-control" name="phone" placeholder="">
      </div>
    </div>
    <div class="col-xs-6">
      <div class="form-group">
        <label>Email</label>
        <input type="text" class="form-control" name="email" placeholder="">
      </div>
    </div>
    <br/>
    <br/>
    <div class="col-xs-12">
      <div class="form-group">
        <label>Forma de Pago</label>
        <select id="paymentType">
          <option value="">Selecciona una forma de pago</option>
          <option value="card">Tarjeta de Credito / Debito </option>
          <option value="oxxo">Deposito en OXXO </option>
          <option value="spei">Transferencia interbancaria SPEI </option>
        </select>
      </div>
    </div>


    <div id="tarjetapayment" class="hidden">
      <div class="col-xs-3">
        <p><b>Tarjetas de Crédito</b></p>
        <img src="/img/visa-mastercard-amex.png" class="col-xs-12">
      </div>
      <div class="col-xs-9">
        <p><b>Tarjetas de Debito</b></p>
        <img src="/img/banamex.png" class="col-xs-3">
        <img src="/img/hsbc.png" class="col-xs-3">
        <img src="/img/inbursa.png" class="col-xs-3">
        <img src="/img/santander.png" class="col-xs-3">
      </div>

      <div class="col-xs-12">
        <br/>
        <br/>
        <br/>
      </div>

      <div class="col-xs-12">
        <div class="form-group">
          <label>Nombre del tarjetahabiente impreso</label>
          <input type="text" class="form-control" name="cardnumber" placeholder="">
        </div>
      </div>
      <div class="col-xs-12">
        <div class="form-group">
          <label>Numero de la tarjeta</label>
          <input type="text" class="form-control" name="cardnumber" placeholder="">
        </div>
      </div>
      <div class="col-xs-3">
        <div class="form-group">
          <label>Mes</label>
          <select>
            <option value="Mes">Mes</option>
            <option value="1">01</option>
            <option value="2">02</option>
            <option value="3">03</option>
            <option value="4">04</option>
            <option value="5">05</option>
            <option value="6">06</option>
            <option value="7">07</option>
            <option value="8">08</option>
            <option value="9">09</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
          </select>

        </div>
      </div>
      <div class="col-xs-3">
        <div class="form-group">
          <label>Año</label>
          <select>
            <option value="Año">Año</option>
            <option value="6">2016</option>
            <option value="7">2017</option>
            <option value="8">2018</option>
            <option value="9">2019</option>
            <option value="10">2020</option>
            <option value="11">2021</option>
            <option value="12">2022</option>
          </select>
        </div>
      </div>
      <div class="col-xs-3">
        <div class="form-group">
          <label>Codigo de seguridad</label>
          <input type="text" class="form-control" name="cardnumber" placeholder="">
        </div>
      </div>

    </div>
    <?php
    /*
    if(!empty($amenities)) {
      foreach($amenities as $amenity) {
        ?>
        <div class="amenity">
          <div class="col-xs-12"><h3><?php echo $amenity['Amenity']['name'];?></h3></div>
          <div class="col-xs-6">
            <?php echo $amenity['Amenity']['description'];?>
          </div>
          <div class="col-xs-1">
            <input type="checkbox">
          </div>
        </div>
        <?php
      }
    }
    */
   ?>
  </div>
  <div class="col-xs-12 text-right">
    <input type="submit" value="Continuar" class="btn btn-default">
  </div>
</form>

<script type="text/javascript">
jQuery(document).ready(function() {
  jQuery("#paymentType").change(function(e){
    var paymentMethod = jQuery("#paymentType").val();
    if(paymentMethod == "card") {
      jQuery("#tarjetapayment").removeClass('hidden');
    } else {
      jQuery("#tarjetapayment").addClass('hidden');
    }
  })
});
</script>
