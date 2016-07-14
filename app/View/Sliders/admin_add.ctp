<div class="box box-default">
  <div class="box-header with-border">
    <h3 class="box-title">Agregar Slider</h3>
    <div class="box-tools pull-right">
      <button data-widget="collapse" class="btn btn-box-tool"><i class="fa fa-minus"></i></button>
    </div>
  </div><!-- /.box-header -->
  <div class="box-body">
    <div class="row">
      <div class="col-md-6">
        <form id="saveSlider" action="/admin/sliders/add" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label>Selecciona el archivo</label>
            <input type="file" name="slider" class="form-control">
          </div><!-- /.form-group -->
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
  $('#add-new-room').on('click', function() {
    
    $('#saveSlider').submit();
  });
});
</script>
