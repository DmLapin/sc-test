<?php
/**
 * @var $this SiteController
 * @var $form CActiveForm
 * @var $model Subscription
 */
?>

<div class="form form_subscription">
	<h1>Форма подписки на наши новости</h1>

<?php $form=$this->beginWidget('CActiveForm', array(
	'enableAjaxValidation'=>false,
	'enableClientValidation'=>true,
	'clientOptions' => array(
		'validateOnSubmit'=>true,
	)
)); ?>

<div class="row">
	<?php echo $form->label($model,'email'); ?>
	<?php echo $form->emailField($model,'email') ?>
	<?php echo $form->error($model,'email'); ?>
</div>

<div class="row submit">
	<?php echo CHtml::submitButton('Подписаться'); ?>
</div>

<?php $this->endWidget(); ?>
</div><!-- form -->