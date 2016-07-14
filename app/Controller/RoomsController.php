<?php
App::uses('AppController', 'Controller');
App::uses('Folder', 'Utility');
App::uses('File', 'Utility');
//require_once(APP . 'Vendor' . DS . 'Upload' . DS . 'class.upload.php');

class RoomsController extends AppController {
  public $medidasImagen = array(
  	array('w' => 420, 'h' => 218),//Recent listed(index)
  	array('w' => 390, 'h' => 274),//Propety grid
  	array('w' => 560, 'h' => 560),//Principal Galeria Single property
  	array('w' => 43, 'h' => 43),//Mos viewed
  	array('w' => 72, 'h' => 72),//Similar property
  	array('w' => 1200, 'h' => 472),//Single property Full WIDTH
  	array('w' => 150, 'h' => 150)//Porperty list
  );

  /**
  * Controller name
  *
  * @var string
  * @access public
  */

  public function index() {
    $this->Paginator->settings = $this->paginate;
    $data = $this->Paginator->paginate($this->modelClass);
    $this->set('rooms', $data);
  }

  public function view($id = null) {
    $this->layout = 'room';
    if($id != null) {
      $options = array(
        'conditions' => array('Room.id' => $id)
      );
      $room = $this->Room->find('first', $options);
      if(!empty($room)) {
        $this->set('room', $room);
      }
    } else {
      $this->redirect("/");
    }

  }

  public function beforeFilter() {
      parent::beforeFilter();

      $this->Auth->allow();
      $this->set('headerText', 'Habitaciones');
  }

  public function admin_index() {
    //Get all the reservations
    $this->Paginator->settings = $this->paginate;

    // similar to findAll(), but fetches paged results
    $data = $this->Paginator->paginate($this->modelClass);
    $this->set('data', $data);

    $this->set('headerDescription', 'Inicio');

    //$reservations = $this->Reservation->find('all', $options);
  }

  public function admin_add() {

    if($this->request->is('post')) {
      //Save room
      if($this->Room->save($this->request->data)) {
        $lastId = $this->Room->getLastInsertId();
        if (!file_exists(WWW_ROOT . 'uploads/rooms/'.$lastId)) {
          mkdir(WWW_ROOT . 'uploads/rooms/'.$lastId, 0777, true);
        }
        if(!empty($this->request->data['photos'])) {
          $data = array();
          foreach($this->request->data['photos'] as $photo) {
            $data[] = array(
              'room_id' => $lastId,
              'url' => '/uploads/rooms/' . $lastId . '/' . $photo
            );
            rename(WWW_ROOT . 'uploads/temprooms/' . $photo, WWW_ROOT . 'uploads/rooms/' . $lastId . '/' . $photo);
          }
          $this->Room->RoomPhoto->saveMany($data);
          $this->redirect("/admin/rooms/index");
        }
      } else {
        //Not saved
      }
    }

    //$reservations = $this->Reservation->find('all', $options);
  }

  public function admin_edit($id = null){
    if($this->request->is('post')) {
      //debug($this->data);exit;
      $lastId = $this->request->data['id'];
      if (!file_exists(WWW_ROOT . 'uploads/rooms/'.$lastId)) {
        mkdir(WWW_ROOT . 'uploads/rooms/'.$lastId, 0777, true);
      }
      if(!empty($this->request->data['photos'])) {
        $data = array();
        foreach($this->request->data['photos'] as $photo) {
          $data[] = array(
            'room_id' => $lastId,
            'url' => '/uploads/rooms/' . $lastId . '/' . $photo
          );
          rename(WWW_ROOT . 'uploads/temprooms/' . $photo, WWW_ROOT . 'uploads/rooms/' . $lastId . '/' . $photo);
        }
        $this->Room->RoomPhoto->saveMany($data);


      }
      $this->Room->save($this->request->data);
      $this->redirect("/admin/rooms/edit/".$lastId);

    } else if (!empty($id)) {
      $options = array('conditions' => array('Room.id' => $id));
      $roomData = $this->Room->find('first' , $options);
      if(!empty($roomData)) {
        $this->set('data', $roomData);
      } else {
        $this->redirect("/admin/rooms/add");
      }
    }
  }

  public function admin_delete($id = null) {
    if(!empty($id)) {
      $roomData = $this->Room->delete($id);
    }
    $this->redirect("/admin/rooms/index");
  }

  public function admin_dates($id = null) {

    if($this->request->is('post')) {
      //debug($this->request);
      //debug($this->request->data['end_date']);
      //debug(strtotime("13/07/16"));exit;
      //find if this new date is the only one
      $startDate = date('Y-m-d', strtotime($this->request->data['start_date']));
      $endDate = date('Y-m-d', strtotime($this->request->data['end_date']));

      //echo $endDate; exit;

      $this->request->data['start_date'] = $startDate;
      $this->request->data['end_date'] = $endDate;

      $options = array(
        'conditions' => array(
          'OR' => array(
            'date(RoomPrice.start_date) BETWEEN ? AND ?' => array($this->request->data['start_date'], $this->request->data['end_date']),
            'date(RoomPrice.end_date) BETWEEN ? AND ?' => array($this->request->data['start_date'], $this->request->data['end_date']),
          ),
          'AND' => array(
            'room_id' => $this->request->data['room_id']
          )
        )
      );
      $options = array('conditions' => array('Room.id' => $this->request->data['room_id']));
      $roomData = $this->Room->find('first', $options);
      if(!empty($roomData)){
        $this->set('data', $roomData);
      }
      $findCurrent = $this->Room->RoomPrice->find('first', $options);
      if(!empty($findCurrent)) {
        //estas fechas se empalman con una ya en base de datos
        $this->Flash->set('Las fechas seleccionadas se empalman con fechas ya existentes en base de datos');

      } else {

        if($this->Room->RoomPrice->save($this->request->data)) {
          $this->Flash->set('Guardado exitosamente');

        } else {
          $this->Flash->set('No se pudo guardar, intenta nuevamente');
        }
      }


      //Add or Modify dates
    } else if (!empty($id)) {
      $options = array('conditions' => array('Room.id' => $id));
      $roomData = $this->Room->find('first', $options);
      if(!empty($roomData)){
        $this->set('data', $roomData);
      }
    }
  }

  public function admin_roomdates($id = null){
    $this->autoRender = false;
    echo '[{"id": "11", "title": "$1400","start": "2016-04-11", "end": "2016-04-14 23:59:00"},{"id": "12", "title": "$1600","start": "2016-04-15"},{"id": "12", "title": "$1700","start": "2016-04-16"}]';exit;
  }

  private function createGallery($propertyId) {
		$path = APP. 'webroot'. DS . 'img' . DS. 'properties'. DS . $propertyId;
		$dir = new Folder();
		if ($dir->create($path)) {
			//Por cada imagen subida por el usuario vamos a repetir el proceso de resize por cada imagen
			foreach ($this->request['data']['Property']['fotos'] as $foto) {
				$foo = new upload($foto);

				if ($foo->uploaded) {
					//Repetimos el proceso por aca imagen pero ahora para cada resolucion

					foreach ($this->medidasImagen  as $image) {
						$fileName = 'propiedad_'.$propertyId.'_'.rand().'_'.$image['w'].'x'.$image['h'];
						$url = '/img/properties/'.$propertyId.'/'. $fileName . '.jpg';
						$photo =  array('PropertyPhoto' => array('property_id' => $propertyId, 'url' => $url, 'width' => $image['w'], 'height' => $image['h']));
						$this->Property->PropertyPhoto->save($photo);
						$foo->file_new_name_body = $fileName;
						$foo->image_resize = true;
						$foo->image_convert = 'jpg';
						$foo->image_x = $image['w'];
						$foo->image_y = $image['h'];
						//$foo->image_ratio_y = true;

						$foo->Process($path);
						if (!$foo->processed) {
							echo 'error : ' . $foo->error;
							return false;
						}

						$this->Property->PropertyPhoto->clear();
					}

				}

				$foo->Clean();
			}

			return true;
		} else {
			return false;
		}
	}
  /**
  * Save room photo file
  *
  *
  * */
  private function saveRoomPhoto($room) {
    if(!empty($room)) {

      $ext = substr(strtolower(strrchr($room['name'], '.')), 1); //get the extension
      $arr_ext = array('jpg', 'jpeg', 'gif'); //set allowed extensions

      //only process if the extension is valid
      if(in_array($ext, $arr_ext))
      {
        //do the actual uploading of the file. First arg is the tmp name, second arg is
        //where we are putting it
        $newName = $this->randomNumber() . '.jpg';
        move_uploaded_file($room['tmp_name'], WWW_ROOT . '/uploads/rooms/' . $newName);

        //prepare the filename for database entry
        $roomPhoto = array(
          'url' => "/uploads/rooms/".$newName,
          'name' => $newName,
        );
        return $roomPhoto;
        //$this->request->data['RoomPhoto'][] = $roomPhoto;
      } else {
        return false;
      }
    }
  }

  public function admin_deletePhotos(){

    if($this->request->is('post')) {
      if(!empty($this->request->data)){
        //debug($this->request->data);exit;
        foreach($this->request->data['RoomPhotos'] as $photosDelete){
            $this->Room->RoomPhoto->delete($photosDelete);
        }
      }
    }

    $this->redirect("/admin/rooms/edit/". $this->request->data['id']);
  }


  //UPLOAD TEMP PHOTOS

  public function uploadTempPhotos() {
    //debug($this->request);exit;
    $this->autoRender = false;
    if(!empty($this->request->params['form']['file'])) {
      $newName = $this->randomNumber() . '.jpg';
      if (!file_exists(WWW_ROOT . 'uploads/temprooms/')) {
        mkdir(WWW_ROOT . 'uploads/temprooms/', 0777, true);
      }
      move_uploaded_file($this->request->params['form']['file']['tmp_name'], WWW_ROOT . 'uploads/temprooms/' . $newName);
      echo $newName;
    } else {
      echo '{"error":"true"}';
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
