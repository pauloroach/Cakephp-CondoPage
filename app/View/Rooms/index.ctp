<div class="room-container room-grid clearfix">

  <?php
  if(!empty($rooms)) {
    foreach($rooms as $room) {
      //debug($room);
      ?>
      <div class="room-box clearfix">
  			<div class="img-container col-sm-6 col-xs-12">
          <?php
          if(!empty($room['RoomPhoto'])){
            ?><img src="<?php echo $room['RoomPhoto'][0]['url'];?>" alt="2"><?
          } else {
            ?><img src="../assets/img/rooms/grid/2.jpg" alt="2"> <?php
          }
          ?>
  				<a href="/rooms/view/<?php echo @$room['Room']['id'];?>" class="btn btn-default">Ver Detalles</a>
  			</div>
  			<div class="details col-sm-6 col-xs-12">
  				<div class="title"><a href="/rooms/<?php echo @$room['Room']['id'];?>">Suite <span><?php echo @$room['Room']['name'];?></span></a></div>
  				<div class="desc">
            Descripción:
  					<?php echo $room['Room']['description']; ?>
  					<ul class="facilities list-inline">
  						<li><i class="fa fa-check"></i>Vista al mar</li>
  						<li><i class="fa fa-check"></i>Internet Grátis</li>
  						<li><i class="fa fa-check"></i>Personas: 4 o 6</li>
  					</ul>
  				</div>
          <div class="desc">
            <div class="col-xs-6">
              <span>Precio VIP</span><br/>
              <strong>$<?php echo $room['Room']['public_price'];?></strong>
            </div>
            <div class="col-xs-6">
              <span>Precio Normal</span><br/>
              <strong>$<?php echo $room['Room']['public_price'];?></strong>
            </div>
          </div>
          <div class="booking-button-container col-xs-12">
            <a href="/rooms/view/<?php echo @$room['Room']['id'];?>" class="btn btn-default">Reservar</a>
          </div>
  			</div>
  		</div>
      <?php
    }
  } else {

  }
  ?>
</div>
