<div class="widget widget_text">
  <h3 class="side-title"><b>Resumen</b></h3>
  <p><b>Suite: </b>Deluxe Front Beach</p>
  <p><b>Llegada: </b> 28-Agosto-2016</p>
  <p><b>Salida: </b> 3-Septiembre-2016</p>
  <p><b>Noches: </b> 5 noches y 6 días</p>
  <p><b>Adultos: </b> 3</p>
  <p><b>Niños: </b> 0</p>
  <br/>
  <div style="border:1px solid black;"></div>
  <br/>
  <p><b>Hospedaje: </b> $1,100.00</p>
  <p><b>IVA 16%: </b> $245.00</p>
  <p><b>IESH 3%: </b> $89.00</p>
  <div style="border:1px solid black;"></div>
  <br/>
  <h4><b>TOTAL:  $1,408.00 MXN</b></h4>
</div>


<!-- Text Widget -->
<?php
if(!empty($this->Session->read('Client'))) {
  $arrival = $this->Session->read('Client.arrival');
  $departure = $this->Session->read('Client.departure');
  $adults = $this->Session->read('Client.adults');
  $children = $this->Session->read('Client.children');
}?>
<div class="widget widget_text">
  <h3 class="side-title"><b>Buscador</b></h3>
  <div id="main-booking-form" class="style-3">
    <form class="booking-form clearfix" action="/reservations/search"><!-- Do Not remove the classes -->
      <div class="input-daterange clearfix">
          <div class="booking-fields col-xs-6 col-md-12">

             <input placeholder="Fecha de Llegada" class="datepicker-fields check-in" type="text" name="arrival" <?php if(!empty($arrival)) { echo 'value="'.$arrival.'"';} ?>><!-- Date Picker field ( Do Not remove the "datepicker-fields" class ) -->
              <i class="fa fa-calendar"></i><!-- Date Picker Icon -->
          </div>
          <div class="booking-fields col-xs-6 col-md-12">
              <input placeholder="Fecha de Salida" class="datepicker-fields check-out" type="text" name="departure" <?php if(!empty($departure)) { echo 'value="'.$departure.'"';} ?>/>
              <i class="fa fa-calendar"></i>
          </div>
      </div>
      <div class="booking-fields col-xs-6 col-md-12">
          <!-- Select boxes ( you can change the items and its value based on your project's needs ) -->
          <select name="adults">
              <option value="">¿Cuantos Adultos?</option><!-- Select box items ( you can change the items and its value based on your project's needs ) -->
              <option value="1" <?php if(!empty($adults) && $adults == 1) { echo "selected"; }?> >1 Adulto</option>
              <option value="2" <?php if(!empty($adults) && $adults == 2) { echo "selected"; }?> >2 Adultos</option>
              <option value="3" <?php if(!empty($adults) && $adults == 3) { echo "selected"; }?> >3 Adultos</option>
              <option value="4" <?php if(!empty($adults) && $adults == 4) { echo "selected"; }?> >4 Adultos</option>
              <option value="5" <?php if(!empty($adults) && $adults == 5) { echo "selected"; }?> >5 Adultos</option>
          </select>
          <!-- End of Select boxes -->
      </div>
      <div class="booking-fields col-xs-6 col-md-12">
        <select name="children">
            <option value="">¿Cuantos Niños?</option>
            <option value="1" <?php if(!empty($children) && $children == 1) { echo "selected"; }?> >1 Niño</option>
            <option value="2" <?php if(!empty($children) && $children == 1) { echo "selected"; }?> >2 Niños</option>
            <option value="3" <?php if(!empty($children) && $children == 1) { echo "selected"; }?> >3 Niños</option>
            <option value="4" <?php if(!empty($children) && $children == 1) { echo "selected"; }?> >4 Niños</option>
            <option value="5" <?php if(!empty($children) && $children == 1) { echo "selected"; }?> >5 Niños</option>
        </select>
      </div>
      <div class="booking-button-container">
          <input class="btn btn-default" value="Buscar" type="submit"/><!-- Submit button -->
      </div>
    </form>
  </div>
</div>
