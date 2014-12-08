<?php
defined('YII_DEBUG') or define('YII_DEBUG', false);
require_once(dirname(__FILE__).'/../common/framework/yii.php');
if (preg_match('#^/admin/*#', $_SERVER['REQUEST_URI']))
{
	$application = 'backend';
}
else
{
	$application = 'frontend';
}

$appConfig = CMap::mergeArray(
	require(dirname(__FILE__).'/../common/config/main.php'),
	require(dirname(__FILE__).'/../'.$application.'/config/main.php')
);
Yii::createWebApplication($appConfig)->run();