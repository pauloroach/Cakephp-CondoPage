<?php
class DashboardsController extends AppController {

  public function beforeFilter() {
    parent::beforeFilter();
    //$this->Auth->allow();
  }
  /*
  /Muestra las opciones en forma de iconos
  */
  public function admin_index(){
    $this->layout = "admin";
  }
}
