<?php

Yii::setPathOfAlias('common', dirname(__FILE__).DIRECTORY_SEPARATOR.'..');

return array(

	'import' => array(
		'common.models.*'
	),

	'components'=>array(

		'db'=>array(
			'class'=>'CDbConnection',
			'connectionString'=>'mysql:host=localhost;dbname=sc-test',
			'username'=>'sc-test',
			'password'=>'sc-test'
		),

    ),

);