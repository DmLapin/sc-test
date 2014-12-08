<?php
/**
 * @var $this SiteController
 * @var $form CActiveForm
 * @var $model Subscription
 */
?>

<h1>Список адресов в рассылке</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'email'
	),
)); ?>