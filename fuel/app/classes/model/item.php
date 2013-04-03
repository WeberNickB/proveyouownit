<?php
use Orm\Model;

class Model_Item extends Model
{
	protected static $_properties = array(
		'id',
		'itemname',
		'itemdescription',
		'itemserial',
		'created_at',
		'updated_at',
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
		$val->add_field('itemname', 'Itemname', 'required|max_length[255]');
		$val->add_field('itemdescription', 'Itemdescription', 'required|max_length[255]');
		$val->add_field('itemserial', 'Itemserial', 'required|max_length[255]');

		return $val;
	}

}
