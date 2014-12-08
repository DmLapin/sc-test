<?php

$appPath = dirname(__FILE__).DIRECTORY_SEPARATOR.'..';

return array(

	'name' => 'Test work',
	'basePath' => $appPath,
	'language' => 'ru',

	'import' => array(
		'application.components.*'
	),

	'components'=>array(

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