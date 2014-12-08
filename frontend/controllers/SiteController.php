<?php

class SiteController extends FrontBaseController {

	public function actionIndex()
	{
		$model = new Subscription();
		if (isset($_POST[get_class($model)]))
		{
			$model->attributes = $_POST[get_class($model)];
			if ($model->save())
			{
				$this->redirect(array('success'));
			}
		}

		$this->render('index', array(
			'model' => $model
		));
	}

	public function actionSuccess()
	{
		$this->render('success');
	}

}