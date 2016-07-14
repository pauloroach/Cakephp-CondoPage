
<?php //debug($data); ?>
<div class="box box-default">
  <div class="box-header with-border">
    <h3 class="box-title">Agregar Suite</h3>
    <div class="box-tools pull-right">
      <button data-widget="collapse" class="btn btn-box-tool"><i class="fa fa-minus"></i></button>
    </div>
  </div><!-- /.box-header -->
  <div class="box-body">
    <div class="row">
      <div class="col-md-6">
        <form id="saveRoom" action="/admin/rooms/edit" method="POST">
          <div class="form-group">
            <label>Nombre de la Suite</label>
            <input placeholder="Ejemplo: Habitacion deluxe" type="text" name="name" class="form-control" value="<?php echo $data['Room']['name'];?>">
          </div><!-- /.form-group -->
          <div class="form-group">
            <label>Descripción</label>
            <textarea placeholder="Ejemplo: Vista al mar, con 2 recamaras, sala comedor, etc" rows="3" class="form-control" name="description"><?php echo $data['Room']['description'];?></textarea>
          </div><!-- /.form-group -->
          <input type="hidden" name="id" value="<?php echo $data['Room']['id'];?>">
        </form>
      </div><!-- /.col -->
      <div class="col-md-6">
        <!--Cargar fotos -->
        <label>Fotos de la Suite</label>

          <form action="/rooms/uploadTempPhotos/" id="myawesomedropzone" class="dropzone">

          </form>

      </div><!-- /.col -->

    </div><!-- /.row -->
    <div class="input-group-btn">
      <button class="btn btn-primary btn-flat" type="button" id="add-new-room">Guardar</button>
    </div><!-- /btn-group -->
  </div><!-- /.box-body -->
  <div class="box-footer">
    Recuerda subir fotos de calidad pero que no pesen más de 2mb ;)
  </div>

  <div class="box box-default">
    <div class="box-body">
      <h3 class="box-title">Eliminar fotos existentes</h3>
      <p>selecciona una o varias y has clic en eliminar fotos</p>
      <form id="deletePhotos" action="/admin/rooms/deletePhotos" method="POST">
        <input type="hidden" name="id" value="<?php echo $data['Room']['id'];?>">
        <?php
        if(!empty($data['RoomPhoto'])) {
          foreach($data['RoomPhoto'] as $photos) {
            ?>
          <div class="col-xs-2">
            <img width="100" height="100" src="<?php echo $photos['url'];?>">
            <br/>
            <input type="checkbox" name="data[RoomPhotos][]" value="<?php echo $photos['id'];?>"> Eliminar
          </div>
            <?php
          }
        }?>
        <div class="input-group-btn">
          <button class="btn btn-primary btn-flat" type="button" id="delete-photos">Eliminar fotos</button>
        </div><!-- /btn-group -->
      </form>
    </div>

  </div>


</div>
<?php
echo $this->Html->script('dropzone.js', array('block' => 'scriptsTop'));
echo $this->Html->css('https://rawgit.com/enyo/dropzone/master/dist/dropzone.css', array('block' => 'scriptsTop'));
?>
<script type="text/javascript">
var myDropzone = Dropzone.options.myawesomedropzone = {
  paramName: "file", // The name that will be used to transfer the file
  maxFilesize: 2, // MB
  addRemoveLinks : true,
};

$( document ).ready(function() {
  $("#delete-photos").on('click', function(){
    $("#deletePhotos").submit();
  });

  $('#add-new-room').on('click', function() {
    var dropper = $("#myawesomedropzone").get(0).dropzone
    var files = dropper.files;
    $.each(files, function(index, value){
      console.log(value.xhr.response);
      $('#saveRoom').append('<input type="hidden" name="photos[]" value="'+value.xhr.response+'" >');
    });
    $('#saveRoom').submit();
  });
});
</script>
