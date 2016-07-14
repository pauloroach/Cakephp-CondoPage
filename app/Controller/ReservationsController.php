<?php

App::uses('AppController', 'Controller');
App::uses('Lib', 'Conekta');

class ReservationsController extends AppController {

  public $paginate = array(
      'limit' => 25,
      'order' => array(
          'Reservation.created' => 'asc'
      )
  );
  public function beforeFilter() {
      parent::beforeFilter();

      $this->Auth->allow(array('search', 'unavailable','reserve'));
      $this->set('headerText', 'Reservaciones');
  }

  public function index() {
    //debug('entre');exit;
  }

  public function admin_index() {

    //Get all the reservations
    $this->Paginator->settings = $this->paginate;

    // similar to findAll(), but fetches paged results
    $data = $this->Paginator->paginate('Reservation');
    $this->set('data', $data);

    $this->set('headerDescription', 'Inicio');

    //$reservations = $this->Reservation->find('all', $options);
  }

  public function reservationdates($roomId, $arrivalDate, $departureDate) {
    //debug($departureDate);exit;
    $this->autoRender = false;

    //GET PRICES FOR BOTH VIP AND PUBLIC
    $room = $this->Reservation->Room->find('first', array('conditions' => array('id' => $roomId)));

    $begin = new DateTime(date('Ymd', strtotime($arrivalDate)));
    $end = new DateTime(date('Ymd', strtotime($departureDate)));
    $interval = new DateInterval('P1D');
    $daterange = new DatePeriod($begin, $interval ,$end);

    $datesArray = array();
    if(!empty($daterange)) {
      foreach($daterange as $date) {
        switch($date->format("D")){
          case 'Fri':
          $datesArray['private'][] = array($date->format("d-m-Y D") => $room['Room']['friday_price']);
          $datesArray['public'][] = array($date->format("d-m-Y D") => $room['Room']['friday_public_price']);
          break;
          case 'Sat':
          $datesArray['private'][] = array($date->format("d-m-Y D") => $room['Room']['saturday_price']);
          $datesArray['public'][] = array($date->format("d-m-Y D") => $room['Room']['saturday_public_price']);
          break;
          case 'Sun':
          $datesArray['private'][] = array($date->format("d-m-Y D") => $room['Room']['sunday_price']);
          $datesArray['public'][] = array($date->format("d-m-Y D") => $room['Room']['sunday_public_price']);
          break;
          default:
          $datesArray['private'][] = array($date->format("d-m-Y D") => $room['Room']['private_price']);
          $datesArray['public'][] = array($date->format("d-m-Y D") => $room['Room']['public_price']);
          break;
        }
        //echo $date->format("D") . "<br>";
      }
      $totalPublic = 0;
      $totalPrivate = 0;
      foreach($datesArray['private'] as $datesResults) {
        $totalPrivate += current($datesResults);
      }
      foreach($datesArray['public'] as $datesResults) {
        $totalPublic += current($datesResults);
      }
      $resultArray = array(
        'totalPrivate' => $totalPrivate,
        'totalPublic' => $totalPublic,
        'dates' => $datesArray
      );
      return $resultArray;
    } else {
      return false;
    }
  }

  public function search() {
    if($this->request->is('get')) {
      //$this->layout = "search";
      $children = 0;
      $adults = 0;
      if(!empty($this->request->query['arrival'])) {
        $arrivalDate = $this->request->query['arrival'];
      }
      if(!empty($this->request->query['departure'])) {
        $departureDate = $this->request->query['departure'];
      }
      if(!empty($this->request->query['adults'])) {
        $adults = $this->request->query['adults'];
      }
      if(!empty($this->request->query['children'])) {
        $children = $this->request->query['children'];
      }


      //debug($array = array("hola" => "vacio"));exit;

      if(!empty($arrivalDate) && !empty($departureDate)) {
        //CHECK AVAILABLE ROOMS
        $options = array(
          'contain' => array('Room'),
          'conditions' => array(
            'OR' => array(
              'date(Reservation.start_date) BETWEEN ? AND ?' => array($arrivalDate, $departureDate),
              'date(Reservation.end_date) BETWEEN ? AND ?' => array($arrivalDate, $departureDate),
            ),
          ),
          'fields' => array('Room.id')
        );
        $currentReservations = $this->Reservation->find('list', $options);
        //FILTER SEARCH TAKING AWAY ROOMS
        if(!empty($currentReservations)) {
          $options = array(
            'conditions' => array(
              'Room.id !=' => $currentReservations
            )
          );
          $roomsAvailable = $this->Reservation->Room->find('all', $options);
        } else {
          //NO RESERVATIONS FOUND, ALL ROOMS AVAILABLE
          $roomsAvailable = $this->Reservation->Room->find('all');
        }

        //SET SESSION VARIABLES
          $this->Session->write('Client.arrival', $arrivalDate);
          $this->Session->write('Client.departure', $departureDate);
          $this->Session->write('Client.adults', $adults);
          $this->Session->write('Client.children', $children);

          $this->set('rooms', $roomsAvailable);
        } else {
          //Display error message
          return $this->redirect(
          array('controller' => 'reservations', 'action' => 'unavailable')
        );
      }
    }
  }

  public function unavailable(){
    //Display unavailable data
  }

  public function reservationsbyuser()
  {
    $conditions = array('conditions'=>array("Reservation.user_id" => $this->Session->read('Auth.User.id')));
    $reservations = $this->{$this->modelClass}->find('all',$conditions);
    if ($this->request->is('requested')) {
      return $reservations;
    }
    $this->set('reservations', $reservations);
    //$this->set(compact('reservations'));
  }

  public function reserve($id = null) {
    //$this->layout = "search";
    $validVariables = $this->validateSessionVariables();
    if(!empty($id) && $validVariables) {
      $this->Session->write('Room.id', $id);


      $options = array(
        'recursive' => 0
      );
      $amenities = $this->Reservation->Amenity->find('all', $options);
      if(!empty($amenities)) {
        $this->set('variables', $validVariables);
        $this->set('amenities', $amenities);




      } else {
          return $this->redirect(
          array('controller' => 'reservations', 'action' => 'unavailable')
        );
      }
    } else {
      return $this->redirect(
        array('controller' => 'reservations', 'action' => 'unavailable')
      );
    }
  }

  public function summary() {
    if($this->request->is('post')) {

      $validVariables = $this->validateSessionVariables();
      if($validVariables) {
        if(!empty($this->data)) {
          //GET TOTAL FOR ROOM SELECTED
          $roomId = $this->Session->read('Room.id');
          $arrivalDate = $this->Session->read('Client.arrival');
          $departureDate = $this->Session->read('Client.departure');
          if(!empty($roomId)) {

            $prices = $this->reservationdates($roomId, $arrivalDate, $departureDate);
            debug($prices);exit;
          }


          foreach($this->data as $key => $value) {
            $arrayValue[] = $key;

          }
          $this->Session->write('Amenities', $arrayValue);
        }
      } else {
        return $this->redirect(
        array('controller' => 'reservations', 'action' => 'unavailable')
      );
    }
  } else {
    //TODO: send to not valid
    return $this->redirect(
    array('controller' => 'reservations', 'action' => 'unavailable')
  );
  }
  }

  public function validateSessionVariables(){
    if($this->Session->read('Client.arrival') == null) {
      return false;
    }
    if($this->Session->read('Client.departure') == null) {
      return false;
    }

    // if($this->Session->read('Client.adults') == null) {
    // return false;
    // }
    // if($this->Session->read('Client.children') == null) {
    // return false;
    // }
    return true;
  }



  public function roomDetails($id = null){
    if (!empty($id)) {
      debug($this->Session->read('Client'));exit;
      debug($id);exit;
    }
  }

  public function detail($reservationid = null){
    $conditions = array('conditions'=>array("Reservation.user_id" => $this->Session->read('Auth.User.id'),"Reservation.id" => $reservationid));
    //debug($conditions);exit;
    $reservation = $this->{$this->modelClass}->find('all',$conditions);
    ;
    if($reservation!= null){
      debug($reservation);exit;
      return $reservation;
    }
    else{
      debug("no hay una reservacion asociada a este usuario con este id".$reservationid);exit;
    }
  }
}
