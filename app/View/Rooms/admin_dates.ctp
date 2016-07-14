<?php //debug($data);?>

<div class="row">
  <?php
  $mensajeFlash = $this->Flash->render();
  if($mensajeFlash != null) {
  ?>
    <div class="alert alert-danger alert-dismissable">
      <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
      <h4><i class="icon fa fa-ban"></i> Aviso!</h4>
      <?php echo $mensajeFlash; ?>
    </div>
  <?php  } ?>
  <div class="col-md-3">
    <div class="box box-solid">

      <div class="box-header with-border">
        <h4 class="box-title">Agregar Fechas / Precio</h4>
      </div>


      <div class="box-body">
        <!-- the events -->
        <div id="external-events">
          <form id="addfecha" action="/admin/rooms/dates/<?php echo $data['Room']['id'];?>" method="POST">
            <label>Fecha Inicial</label>
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </div>
              <input id="date1" name="start_date" type="text" data-mask="" data-inputmask="'alias': 'dd/mm/yyyy'" class="form-control">
            </div>
            <label>Fecha Final</label>
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </div>
              <input id="date2" name="end_date" type="text" data-mask="" data-inputmask="'alias': 'dd/mm/yyyy'" class="form-control">
            </div>

            <hr/>
            <label>Precio VIP</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
              <input id="preciovip" type="text" class="form-control" name="private_price" value="<?php echo @$data['Room']['private_price']; ?>">
            </div>
            <label>Precio VIP Viernes</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
              <input id="preciovipviernes" type="text" class="form-control" name="private_price_friday" value="<?php echo @$data['Room']['private_price_friday'];?>">
            </div>
            <label>Precio VIP Sabado</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
              <input id="preciovipsabado" type="text" class="form-control" name="private_price_saturday" value="<?php echo @$data['Room']['private_price_saturday'];?>">
            </div>
            <label>Precio VIP Domingo</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
              <input id="preciovipdomingo" type="text" class="form-control" name="private_price_sunday" value="<?php echo @$data['Room']['private_price_sunday'];?>">
            </div>

            <hr/>
            <label>Precio Normal</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
              <input id="precionormal" type="text" class="form-control" name="public_price" value="<?php echo @$data['Room']['public_price'];?>">
            </div>
            <label>Precio Normal Viernes</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
              <input id="precionormalviernes" type="text" class="form-control" name="public_price_friday" value="<?php echo @$data['Room']['public_price_friday'];?>">
            </div>
            <label>Precio Normal Sabado</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
              <input id="precionormalsabado"type="text" class="form-control" name="public_price_saturday" value="<?php echo @$data['Room']['public_price_saturday'];?>">
            </div>
            <label>Precio Normal Domingo</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
              <input id="precionormaldomingo" type="text" class="form-control" name="public_price_sunday" value="<?php echo @$data['Room']['public_price_sunday'];?>">
            </div>

            <input type="hidden" name="room_id" value="<?php echo @$data['Room']['id'];?>">

            <hr/>
            <div class="input-group-btn">
              <button class="btn btn-primary btn-flat pull-left" type="button" id="add-new-date">Guardar</button>
              <button class="btn btn-secondary btn-flat pull-right" type="button" id="cancel">Cancelar</button>
            </div><!-- /btn-group -->

          </form>
        </div>
      </div><!-- /.box-body -->
    </div><!-- /. box -->

  </div><!-- /.col -->
  <div class="col-md-9">
    <div class="box box-primary">
      <div class="box-body no-padding">
        <!-- THE CALENDAR -->
        <div id='calendar'></div>
        <!-- <div id="calendar" class="fc fc-ltr fc-unthemed"><div class="fc-toolbar"><div class="fc-left"><div class="fc-button-group"><button class="fc-prev-button fc-button fc-state-default fc-corner-left" type="button"><span class="fc-icon fc-icon-left-single-arrow"></span></button><button class="fc-next-button fc-button fc-state-default fc-corner-right" type="button"><span class="fc-icon fc-icon-right-single-arrow"></span></button></div><button class="fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right fc-state-disabled" type="button" disabled="disabled">today</button></div><div class="fc-right"><div class="fc-button-group"><button class="fc-month-button fc-button fc-state-default fc-corner-left fc-state-active" type="button">month</button><button class="fc-agendaWeek-button fc-button fc-state-default" type="button">week</button><button class="fc-agendaDay-button fc-button fc-state-default fc-corner-right" type="button">day</button></div></div><div class="fc-center"><h2>January 2016</h2></div><div class="fc-clear"></div></div><div class="fc-view-container" style=""><div class="fc-view fc-month-view fc-basic-view" style=""><table><thead><tr><td class="fc-widget-header"><div class="fc-row fc-widget-header"><table><thead><tr><th class="fc-day-header fc-widget-header fc-sun">Sun</th><th class="fc-day-header fc-widget-header fc-mon">Mon</th><th class="fc-day-header fc-widget-header fc-tue">Tue</th><th class="fc-day-header fc-widget-header fc-wed">Wed</th><th class="fc-day-header fc-widget-header fc-thu">Thu</th><th class="fc-day-header fc-widget-header fc-fri">Fri</th><th class="fc-day-header fc-widget-header fc-sat">Sat</th></tr></thead></table></div></td></tr></thead><tbody><tr><td class="fc-widget-content"><div class="fc-day-grid-container" style=""><div class="fc-day-grid"><div class="fc-row fc-week fc-widget-content" style="height: 88px;"><div class="fc-bg"><table><tbody><tr><td data-date="2015-12-27" class="fc-day fc-widget-content fc-sun fc-other-month fc-past"></td><td data-date="2015-12-28" class="fc-day fc-widget-content fc-mon fc-other-month fc-past"></td><td data-date="2015-12-29" class="fc-day fc-widget-content fc-tue fc-other-month fc-past"></td><td data-date="2015-12-30" class="fc-day fc-widget-content fc-wed fc-other-month fc-past"></td><td data-date="2015-12-31" class="fc-day fc-widget-content fc-thu fc-other-month fc-past"></td><td data-date="2016-01-01" class="fc-day fc-widget-content fc-fri fc-past"></td><td data-date="2016-01-02" class="fc-day fc-widget-content fc-sat fc-past"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td data-date="2015-12-27" class="fc-day-number fc-sun fc-other-month fc-past">27</td><td data-date="2015-12-28" class="fc-day-number fc-mon fc-other-month fc-past">28</td><td data-date="2015-12-29" class="fc-day-number fc-tue fc-other-month fc-past">29</td><td data-date="2015-12-30" class="fc-day-number fc-wed fc-other-month fc-past">30</td><td data-date="2015-12-31" class="fc-day-number fc-thu fc-other-month fc-past">31</td><td data-date="2016-01-01" class="fc-day-number fc-fri fc-past">1</td><td data-date="2016-01-02" class="fc-day-number fc-sat fc-past">2</td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td class="fc-event-container"><a style="background-color:#f56954;border-color:#f56954" class="fc-day-grid-event fc-event fc-start fc-end fc-draggable"><div class="fc-content"><span class="fc-time">12a</span> <span class="fc-title">All Day Event</span></div></a></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 88px;"><div class="fc-bg"><table><tbody><tr><td data-date="2016-01-03" class="fc-day fc-widget-content fc-sun fc-past"></td><td data-date="2016-01-04" class="fc-day fc-widget-content fc-mon fc-past"></td><td data-date="2016-01-05" class="fc-day fc-widget-content fc-tue fc-past"></td><td data-date="2016-01-06" class="fc-day fc-widget-content fc-wed fc-past"></td><td data-date="2016-01-07" class="fc-day fc-widget-content fc-thu fc-past"></td><td data-date="2016-01-08" class="fc-day fc-widget-content fc-fri fc-past"></td><td data-date="2016-01-09" class="fc-day fc-widget-content fc-sat fc-past"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td data-date="2016-01-03" class="fc-day-number fc-sun fc-past">3</td><td data-date="2016-01-04" class="fc-day-number fc-mon fc-past">4</td><td data-date="2016-01-05" class="fc-day-number fc-tue fc-past">5</td><td data-date="2016-01-06" class="fc-day-number fc-wed fc-past">6</td><td data-date="2016-01-07" class="fc-day-number fc-thu fc-past">7</td><td data-date="2016-01-08" class="fc-day-number fc-fri fc-past">8</td><td data-date="2016-01-09" class="fc-day-number fc-sat fc-past">9</td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td class="fc-event-container" colspan="3"><a style="background-color:#f39c12;border-color:#f39c12" class="fc-day-grid-event fc-event fc-start fc-end fc-draggable"><div class="fc-content"><span class="fc-time">12a</span> <span class="fc-title">Long Event</span></div></a></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 88px;"><div class="fc-bg"><table><tbody><tr><td data-date="2016-01-10" class="fc-day fc-widget-content fc-sun fc-past"></td><td data-date="2016-01-11" class="fc-day fc-widget-content fc-mon fc-past"></td><td data-date="2016-01-12" class="fc-day fc-widget-content fc-tue fc-today fc-state-highlight"></td><td data-date="2016-01-13" class="fc-day fc-widget-content fc-wed fc-future"></td><td data-date="2016-01-14" class="fc-day fc-widget-content fc-thu fc-future"></td><td data-date="2016-01-15" class="fc-day fc-widget-content fc-fri fc-future"></td><td data-date="2016-01-16" class="fc-day fc-widget-content fc-sat fc-future"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td data-date="2016-01-10" class="fc-day-number fc-sun fc-past">10</td><td data-date="2016-01-11" class="fc-day-number fc-mon fc-past">11</td><td data-date="2016-01-12" class="fc-day-number fc-tue fc-today fc-state-highlight">12</td><td data-date="2016-01-13" class="fc-day-number fc-wed fc-future">13</td><td data-date="2016-01-14" class="fc-day-number fc-thu fc-future">14</td><td data-date="2016-01-15" class="fc-day-number fc-fri fc-future">15</td><td data-date="2016-01-16" class="fc-day-number fc-sat fc-future">16</td></tr></thead><tbody><tr><td rowspan="2"></td><td rowspan="2"></td><td class="fc-event-container"><a style="background-color:#0073b7;border-color:#0073b7" class="fc-day-grid-event fc-event fc-start fc-end fc-draggable"><div class="fc-content"><span class="fc-time">10:30a</span> <span class="fc-title">Meeting</span></div></a></td><td class="fc-event-container" rowspan="2"><a style="background-color:#00a65a;border-color:#00a65a" class="fc-day-grid-event fc-event fc-start fc-end fc-draggable"><div class="fc-content"><span class="fc-time">7p</span> <span class="fc-title">Birthday Party</span></div></a></td><td rowspan="2"></td><td rowspan="2"></td><td rowspan="2"></td></tr><tr><td class="fc-event-container"><a style="background-color:#00c0ef;border-color:#00c0ef" class="fc-day-grid-event fc-event fc-start fc-end fc-draggable"><div class="fc-content"><span class="fc-time">12p</span> <span class="fc-title">Lunch</span></div></a></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 88px;"><div class="fc-bg"><table><tbody><tr><td data-date="2016-01-17" class="fc-day fc-widget-content fc-sun fc-future"></td><td data-date="2016-01-18" class="fc-day fc-widget-content fc-mon fc-future"></td><td data-date="2016-01-19" class="fc-day fc-widget-content fc-tue fc-future"></td><td data-date="2016-01-20" class="fc-day fc-widget-content fc-wed fc-future"></td><td data-date="2016-01-21" class="fc-day fc-widget-content fc-thu fc-future"></td><td data-date="2016-01-22" class="fc-day fc-widget-content fc-fri fc-future"></td><td data-date="2016-01-23" class="fc-day fc-widget-content fc-sat fc-future"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td data-date="2016-01-17" class="fc-day-number fc-sun fc-future">17</td><td data-date="2016-01-18" class="fc-day-number fc-mon fc-future">18</td><td data-date="2016-01-19" class="fc-day-number fc-tue fc-future">19</td><td data-date="2016-01-20" class="fc-day-number fc-wed fc-future">20</td><td data-date="2016-01-21" class="fc-day-number fc-thu fc-future">21</td><td data-date="2016-01-22" class="fc-day-number fc-fri fc-future">22</td><td data-date="2016-01-23" class="fc-day-number fc-sat fc-future">23</td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 88px;"><div class="fc-bg"><table><tbody><tr><td data-date="2016-01-24" class="fc-day fc-widget-content fc-sun fc-future"></td><td data-date="2016-01-25" class="fc-day fc-widget-content fc-mon fc-future"></td><td data-date="2016-01-26" class="fc-day fc-widget-content fc-tue fc-future"></td><td data-date="2016-01-27" class="fc-day fc-widget-content fc-wed fc-future"></td><td data-date="2016-01-28" class="fc-day fc-widget-content fc-thu fc-future"></td><td data-date="2016-01-29" class="fc-day fc-widget-content fc-fri fc-future"></td><td data-date="2016-01-30" class="fc-day fc-widget-content fc-sat fc-future"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td data-date="2016-01-24" class="fc-day-number fc-sun fc-future">24</td><td data-date="2016-01-25" class="fc-day-number fc-mon fc-future">25</td><td data-date="2016-01-26" class="fc-day-number fc-tue fc-future">26</td><td data-date="2016-01-27" class="fc-day-number fc-wed fc-future">27</td><td data-date="2016-01-28" class="fc-day-number fc-thu fc-future">28</td><td data-date="2016-01-29" class="fc-day-number fc-fri fc-future">29</td><td data-date="2016-01-30" class="fc-day-number fc-sat fc-future">30</td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td class="fc-event-container"><a style="background-color:#3c8dbc;border-color:#3c8dbc" href="http://google.com/" class="fc-day-grid-event fc-event fc-start fc-end fc-draggable"><div class="fc-content"><span class="fc-time">12a</span> <span class="fc-title">Click for Google</span></div></a></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 90px;"><div class="fc-bg"><table><tbody><tr><td data-date="2016-01-31" class="fc-day fc-widget-content fc-sun fc-future"></td><td data-date="2016-02-01" class="fc-day fc-widget-content fc-mon fc-other-month fc-future"></td><td data-date="2016-02-02" class="fc-day fc-widget-content fc-tue fc-other-month fc-future"></td><td data-date="2016-02-03" class="fc-day fc-widget-content fc-wed fc-other-month fc-future"></td><td data-date="2016-02-04" class="fc-day fc-widget-content fc-thu fc-other-month fc-future"></td><td data-date="2016-02-05" class="fc-day fc-widget-content fc-fri fc-other-month fc-future"></td><td data-date="2016-02-06" class="fc-day fc-widget-content fc-sat fc-other-month fc-future"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td data-date="2016-01-31" class="fc-day-number fc-sun fc-future">31</td><td data-date="2016-02-01" class="fc-day-number fc-mon fc-other-month fc-future">1</td><td data-date="2016-02-02" class="fc-day-number fc-tue fc-other-month fc-future">2</td><td data-date="2016-02-03" class="fc-day-number fc-wed fc-other-month fc-future">3</td><td data-date="2016-02-04" class="fc-day-number fc-thu fc-other-month fc-future">4</td><td data-date="2016-02-05" class="fc-day-number fc-fri fc-other-month fc-future">5</td><td data-date="2016-02-06" class="fc-day-number fc-sat fc-other-month fc-future">6</td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div></div></div></td></tr></tbody></table></div></div></div> -->
      </div><!-- /.box-body -->
    </div><!-- /. box -->
  </div><!-- /.col -->
</div>




<?php
//CSS
echo $this->Html->css('/admin-assets/js/plugins/fullcalendar/fullcalendar.css');
echo $this->Html->css('/admin-assets/js/plugins/datepicker/datepicker3.css');

//Javascripts
echo $this->Html->script('/admin-assets/js/plugins/input-mask/jquery.inputmask.js', array('block' => 'scriptsTop'));
echo $this->Html->script('/admin-assets/js/plugins/input-mask/jquery.inputmask.date.extensions.js', array('block' => 'scriptsTop'));
echo $this->Html->script('/admin-assets/js/plugins/input-mask/jquery.inputmask.extensions.js', array('block' => 'scriptsTop'));
echo $this->Html->script('/admin-assets/js/plugins/datepicker/bootstrap-datepicker.js', array('block' => 'scriptsTop'));
echo $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js', array('block' => 'scriptsTop'));
echo $this->Html->script('/admin-assets/js/plugins/fullcalendar/fullcalendar.min.js', array('block' => 'scriptsTop'));
echo $this->Html->script('/admin-assets/js/plugins/fullcalendar/lang-all.js', array('block' => 'scriptsTop'));
?>

<script type="text/javascript">
$(document).ready(function() {

  function validarCampos() {
    var valido = true;
    if($('#date1').val != ""){
      valido = false;
    }
    if($('#date2').val != ""){
      valido = false;
    }

    if($('#preciovip').val != ""){
      return false;
    }

    return valido;
  }

  $('#cancel').on('click', function(){
    window.location.href = "/admin/rooms";
  });

  $('#add-new-date').on('click', function() {
    var valido = validarCampos();
    console.log(valido);
    if(valido == false) {
      $('#addfecha').submit();
    }
  });

  $('#date1, #date2').datepicker({
    format: 'mm/dd/yyyy',
    autoclose:true
  });
   $('#calendar').fullCalendar({
     header: {
       left: 'prev,next today',
       center: 'title',
       right: 'month,basicWeek,basicDay'
     },

     lang: "es",
     editable: true,
     eventLimit: true, // allow "more" link when too many events
     eventSources : [{
       url: '/admin/rooms/roomdates/',
       type: 'POST',
       data: {'id': '11'}
      }
     ],


   });

 });
</script>
