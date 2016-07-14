<?php

App::uses('AppModel', 'Model');

class Reservation extends AppModel {

/**
 * Model name
 *
 * @var string
 * @access public
 */
    public $name = 'Reservation';

    public $belongsTo = array('Room');
    //public $hasMany = array('Amenity'); //CHECAR ESTE DATO
    public $hasAndBelongsToMany = array('Amenity');


}
