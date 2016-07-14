<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Reservaciones</h3>
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
              <th>Llegada</th>
              <th>Salida</th>
              <th>Noches</th>
              <th>Opciones</th>
            </tr>
            <?php
            if(!empty($data)) {

              foreach($data as $displayData) {
                $datediff = strtotime($displayData['Reservation']['end_date']) - strtotime($displayData['Reservation']['start_date']);
                $newDateDiff =  floor($datediff/(60*60*24));
                //debug($displayData);exit;
                echo "<tr>";
                echo "<td>" . $displayData['Reservation']['id'] . "</td>";
                echo "<td>" . $displayData['Room']['name'] . "</td>";
                echo "<td>" . $displayData['Reservation']['start_date'] . "</td>";
                echo "<td>" . $displayData['Reservation']['end_date'] . "</td>";
                echo "<td>" . $newDateDiff . "</td>";
                echo "<td> <div class='btn-group'><a class='btn btn-info' href=''>Revisar</a><a class='btn btn-warning' href=''>Editar</a><a class='btn btn-danger' href=''>Eliminar</a></div></td>";
                echo "</tr>";
              }

            }
            ?>
        </tbody></table>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div>
</div>
