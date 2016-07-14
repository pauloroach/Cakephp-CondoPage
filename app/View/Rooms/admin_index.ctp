<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Habitaciones</h3>
        <div class="box-tools">
          <div style="width: 150px;" class="input-group">
            <input type="text" placeholder="Search" class="form-control input-sm pull-right" name="table_search">
            <div class="input-group-btn">
              <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </div>
      </div><!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
          <tbody>
            <tr>
              <th>ID</th>
              <th>Suite</th>
              <th>Descripción</th>
              <th>Opciones</th>

            </tr>
            <?php
            if(!empty($data)) {
              foreach($data as $displayData) {

                //debug($displayData);exit;
                echo "<tr>";
                echo "<td>" . $displayData['Room']['id'] . "</td>";
                echo "<td>" . $displayData['Room']['name'] . "</td>";
                echo "<td>" . $displayData['Room']['description'] . "</td>";
                echo "<td> <div class='btn-group'><a class='btn btn-info' href='/admin/rooms/dates/" . $displayData['Room']['id']. "'>Fechas</a><a class='btn btn-warning' href='/admin/rooms/edit/" . $displayData['Room']['id']. "'>Editar</a><a class='btn btn-danger deleteit' href='/admin/rooms/delete/". $displayData['Room']['id']." '>Eliminar</a></div></td>";
                echo "</tr>";
              }
            }
            ?>
        </tbody></table>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div>
</div>
<?php
echo $this->Html->script('deleteadmin', array('block' => 'scriptsBottom', 'inline' => false)); ?>
