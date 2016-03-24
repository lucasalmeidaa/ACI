<?php

class Linked extends AppModel {

    public $name = 'Linked';	
    public $belongsTo = array('Course' => array('className' => 'Course'), 'Computer' => array('className' => 'Computer'));

}
