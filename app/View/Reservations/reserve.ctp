<h1>Reservacion de Suite</h1>
<p>Ya solo estas a un paso de completar tu reservación, pero antes quisieramos saber si desearías agregar alguna de estas opciones a tu reservación</p>

<div class="col-xs-12">
  <?php
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
 ?>
</div>
<div class="col-xs-12 text-right">
  <a class="btn btn-default" href="/">Continuar</a>
</div>
