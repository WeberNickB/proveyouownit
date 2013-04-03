<?php

namespace Fuel\Migrations;

class Create_files
{
	public function up()
	{
		\DBUtil::create_table('files', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'itemID' => array('constraint' => 11, 'type' => 'int'),
			'name' => array('constraint' => 255, 'type' => 'varchar'),
			'type' => array('constraint' => 30, 'type' => 'varchar'),
			'size' => array('constraint' => 11, 'type' => 'int'),
			'content' => array('type' => 'LONGBLOB'),
			'created_at' => array('constraint' => 11, 'type' => 'int'),
			'updated_at' => array('constraint' => 11, 'type' => 'int'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('files');
	}
}