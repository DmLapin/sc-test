<?php

$appPath = dirname(__FILE__).DIRECTORY_SEPARATOR.'..';

return array(

	'name' => 'Test work',
	'basePath' => $appPath,

	'import' => array(
		'application.components.*'
	),

	'components'=>array(

		'urlManager'=>array(
			'urlFormat' => 'path',
			'showScriptName' => false
		),

	),

);