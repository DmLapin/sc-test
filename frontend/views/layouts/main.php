<?
/**
 * Шаблон по умолчанию. Контент будет декорирован макетом base.php
 * @var $this FrontBaseController
 */

$this->beginContent('//layouts/base');
?>
	<div class="page page_admin">
		<?php echo $content; ?>
	</div>
<?
$this->endContent();