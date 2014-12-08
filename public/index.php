<?php
defined('YII_DEBUG') or define('YII_DEBUG',true);
require_once(dirname(__FILE__).'/../common/framework/yii.php');

$application = 'frontend';

$appConfig = CMap::mergeArray(
	require(dirname(__FILE__).'/../common/config/main.php'),
	require(dirname(__FILE__).'/../'.$application.'/config/main.php')
);
Yii::createWebApplication($appConfig)->run();