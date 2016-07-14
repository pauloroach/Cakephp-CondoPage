<?php

App::uses('AppModel', 'Model');

class RoomPrice extends AppModel {

    /**
     * Model name
     *
     * @var string
     * @access public
     */
     public $name = 'RoomPrice';




    /**
     * Model associations: belongsTo
     *
     * @var array
     * @access public
     */
	public $belongsTo = array(
		'Room'
	);
}
