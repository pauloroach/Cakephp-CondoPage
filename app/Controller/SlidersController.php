<?php

class SlidersController extends AppController {

  public function beforeFilter() {
    parent::beforeFilter();

  }


  public function admin_index() {
    //Get all the reservations
    $this->Paginator->settings = $this->paginate;

    // similar to findAll(), but fetches paged results
    $data = $this->Paginator->paginate($this->modelClass);
    $this->set('data', $data);

    $this->set('headerDescription', 'Inicio');
  }

  public function admin_add() {
    if($this->request->is('post')) {
      if (!file_exists(WWW_ROOT . 'uploads/sliders/')) {
        mkdir(WWW_ROOT . 'uploads/sliders/', 0777, true);
      }
      if(!empty($this->request->params['form']['slider'])) {
        $newName = $this->randomNumber() . '.jpg';
        $data = array(
          'name' => $newName,
          'url' => '/uploads/sliders/'.$newName.'.jpg'
        );
        move_uploaded_file($this->request->params['form']['slider']['tmp_name'], WWW_ROOT . 'uploads/sliders/' . $newName);
        $this->Slider->save($data);
        $this->redirect("/admin/sliders/index");
      }


    }

  }

  public function admin_edit($id = null) {

    if($this->request->is('post')) {
      //Add or Modify dates
      debug($this->request->data); exit;
      $this->redirect("/admin/sliders/index");

    } else if (!empty($id)) {
      $options = array('conditions' => array('Slider.id' => $id));
      $slider = $this->Slider->find('first', $options);
      if(!empty($slider)) {
        $this->set('data', $slider);
      }
    }

  }

  public function admin_delete($id) {
    if(!empty($id)) {
      $roomData = $this->Slider->delete($id);
    }
    $this->redirect("/admin/sliders/index");
  }

  public function show() {
    $data = $this->{$this->modelClass}->find('all');
    if(!empty($data)) {
      $this->set('data', $data);
      //debug($data);exit;
    }
  }

  private function randomNumber() {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < 20; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
    //debug($randomString);exit;
  }


}
