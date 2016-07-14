<?php
App::uses('AppModel', 'Model');
class Amenity extends AppModel {

  /**
   * Model name
   *
   * @var string
   * @access public
   */
      public $name = 'Amenity';

      //public $hasMany = array('Amenity'); //CHECAR ESTE DATO
      public $hasAndBelongsToMany = array('Reservation');

  }
