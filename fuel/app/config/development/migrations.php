<?php
return array(
	'version' => 
	array(
		'app' => 
		array(
			'default' => 
			array(
				0 => '001_create_items',
				1 => '005_create_files',
				2 => '006_create_files',
				3 => '007_create_users',
			),
		),
		'module' => 
		array(
		),
		'package' => 
		array(
			'ninjauth' => 
			array(
				0 => '001_create_authentications',
				1 => '002_add_refresh_tokens',
				2 => '003_Allow_null_secret',
			),
		),
	),
	'folder' => 'migrations/',
	'table' => 'migration',
);
