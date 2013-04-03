<?php

class Model_File extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'itemID',
		'name',
		'type',
		'size',
		'content',
		'created_at',
		'updated_at'
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => false,
		),
	);
	
	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('name', 'Name', 'required');
		$val->add_field('type', 'Type', 'required');
		$val->add_field('size', 'Size', 'required'); 
        $val->add_field('content', 'Content', 'required');

		return $val;
	}
	
}
