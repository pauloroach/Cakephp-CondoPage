<?php

App::uses('AppModel', 'Model');

class RoomPhoto extends AppModel {

    /**
     * Model name
     *
     * @var string
     * @access public
     */
     public $name = 'RoomPhoto';




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
