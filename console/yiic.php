<?php
// fix for fcgi
defined('STDIN') or define('STDIN', fopen('php://stdin', 'r'));
defined('YII_DEBUG') or define('YII_DEBUG',true);

require_once(dirname(__FILE__).'/../common/framework/yii.php');

$appConfig = CMap::mergeArray(
	require(dirname(__FILE__).'/../common/config/main.php'),
	require(dirname(__FILE__).'/config/main.php')
);

$app = Yii::createConsoleApplication($appConfig);
$app->commandRunner->addCommands(YII_PATH.'/cli/commands');

$env=@getenv('YII_CONSOLE_COMMANDS');
if(!empty($env))
	$app->commandRunner->addCommands($env);

$app->run();