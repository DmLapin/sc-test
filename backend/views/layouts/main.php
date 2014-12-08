<?
/**
 * Шаблон по умолчанию. Контент будет декорирован макетом base.php
 * @var $this CController
 */

$this->beginContent('//layouts/base');
	echo $content;
$this->endContent();