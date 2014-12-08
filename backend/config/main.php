<?php

$appPath = dirname(__FILE__).DIRECTORY_SEPARATOR.'..';

return array(

	'name' => 'Test work - Admin',
	'basePath' => $appPath,
	'language' => 'ru',

	'import' => array(
		'application.components.*',
		'application.models.*'
	),

	'components'=>array(

		'assetManager'=>array(
			'baseUrl'=>'/assets',
			'forceCopy' => YII_DEBUG
		),
		'request' => array(
			'baseUrl' => '/admin',
		),
		'urlManager'=>array(
			'urlFormat' => 'path',
			'showScriptName' => false
		),
		'clientScript' => array(
			'defaultScriptFilePosition' => CClientScript::POS_END,
			'coreScriptPosition' => CClientScript::POS_END
		)

	),

);