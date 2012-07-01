<?php 
class GivrateSchema extends CakeSchema {

	public $connection = 'ratings';

	public function before($event = array()) {
		return true;
	}

	public function after($event = array()) {
	}

	var $ratings = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11),
		'model' => array('type' => 'string', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'foreign_key' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11),
		'value' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'un_rating' => array('column' => array('user_id', 'foreign_key', 'model'), 'unique' => 1)
			)
		);

	var $rate_calculates = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULl, 'length' => 11, 'key' => 'primary'),
		'model' => array('type' => 'string', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'foreign_key' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11),
		'count' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'sum' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'avg' => array('type' => 'float', 'null' => true, 'default' => '0', 'length' => '8,4'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'un_rate_calculate' => array('column' => array('foreign_key', 'model'), 'unique' => 1)
			)
		);
}