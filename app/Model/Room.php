<?php

App::uses('AppModel', 'Model');

class Room extends AppModel {
  /**
  * Model name
  *
  * @var string
  * @access public
  */
  public $name = 'Room';



  /**
   * Model associations: hasMany
   *
   * @var array
   * @access public
   */
  	public $hasMany = array(
  		'RoomPhoto',
      'RoomPrice'
  	);


  /**
  * Validation
  *
  * @var array
  * @access public
  */
  public $validate = array(
    'name' => array(
      'rule' => 'notBlank',
      'message' => 'This field cannot be left blank.',
    ),
    'description' => array(
      'rule' => 'notBlank',
      'message' => 'This field cannot be left blank.',
    ),
    'public_price' => array(
      'rule' => 'notBlank',
      'message' => 'This field cannot be left blank.',
    ),
    'friday_public_price' => array(
      'rule' => 'notBlank',
      'message' => 'This field cannot be left blank.',
    ),
    'saturday_public_price' => array(
      'rule' => 'notBlank',
      'message' => 'This field cannot be left blank.',
    ),
    'sunday_public_price' => array(
      'rule' => 'notBlank',
      'message' => 'This field cannot be left blank.',
    ),
    'private_price' => array(
      'rule' => 'notBlank',
      'message' => 'This field cannot be left blank.',
    ),
    'friday_price' => array(
      'rule' => 'notBlank',
      'message' => 'This field cannot be left blank.',
    ),
    'saturday_price' => array(
      'rule' => 'notBlank',
      'message' => 'This field cannot be left blank.',
    ),
    'sunday_price' => array(
      'rule' => 'notBlank',
      'message' => 'This field cannot be left blank.',
    ),
  );
}
