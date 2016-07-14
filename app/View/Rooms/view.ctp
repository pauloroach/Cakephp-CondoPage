<?php
if(!empty($this->Session->read('Client'))) {
  $arrival = $this->Session->read('Client.arrival');
  $departure = $this->Session->read('Client.departure');
  $adults = $this->Session->read('Client.adults');
  $children = $this->Session->read('Client.children');
}
?>
<!-- Main Slider -->


<div id="room-details-slider">
  <?php
  if(!empty($room['RoomPhoto'])) {
    $aux = 1;
    foreach($room['RoomPhoto'] as $photos) {
      ?>
      <div class="items">
        <img src="<?php echo $photos['url'];?>" alt="<?php echo $aux;?>"/><!-- Change the URL section based on your image\'s name -->
      </div>
      <?php
      $aux++;
    }
  } else {
    ?>
    <div class="items">
      <img src="/assets/img/rooms/1.jpg" />
    </div>
    <?php
  }
  ?>
</div>

<div class="booking-title-box">
  <div class="booking-title-box-inner container">
    <!-- Heading box -->
    <div class="heading-box">
      <h2><span>Suite</span> <?php echo $room['Room']['name'];?></h2><!-- Title -->
    </div>

    <!-- Booking form -->
    <form class="booking-form clearfix" action="/reservations/reserve/<?php echo $room['Room']['id'];?>"><!-- Do Not remove the classes -->
      <input type="hidden" name="roomId" value="<?php echo $room['Room']['id'];?>">
      <div class="input-daterange col-md-6">
        <div class="booking-fields col-md-6">
          <input placeholder="Fecha de Llegada" class="datepicker-fields check-in" type="text" name="arrival" <?php if(!empty($arrival)) { echo 'value="'.$arrival.'"';} ?>>
          <i class="fa fa-calendar"></i><!-- Date Picker Icon -->
        </div>
        <div class="booking-fields col-md-6">
          <input placeholder="Fecha de Salida" class="datepicker-fields check-out" type="text" name="departure" <?php if(!empty($departure)) { echo 'value="'.$departure.'"';} ?>/>
          <i class="fa fa-calendar"></i>
        </div>
      </div>
      <div class="booking-fields col-md-3">
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
      <div class="booking-fields col-md-3">
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
        <input class="btn btn-default" value="Reserva Ya" type="submit"/><!-- Submit button -->
      </div>
    </form>
  </div>
</div>
<div class="room-details container">
  <div class="description">
    <p>Descripción:</p>
    <p><?php echo $room['Room']['description'];?></p>
  </div>
  <!--
  <ul class="services list-inline">
    <li><i class="fa fa-check"></i>Breakfast Included</li>
    <li><i class="fa fa-check"></i>Free Wifi</li>
    <li><i class="fa fa-check"></i>Room Size : 60 sqm</li>
    <li><i class="fa fa-check"></i>Max 2 people</li>
    <li><i class="fa fa-check"></i>Sea View</li>
  </ul>-->
</div>
