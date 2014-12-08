<?php

class SiteController extends BackendBaseController
{
	public $assetsUrl;

	protected function beforeRender($view)
	{
		/**
		 * Публикация статики, принадлежащей этому приложению. Она будет доступна по ссылке $this->assetsUrl
		 */
		if (file_exists(Yii::app()->viewPath.DIRECTORY_SEPARATOR.'assets'))
		{
			/**
			 * @var $am CAssetManager
			 */
			$am = Yii::app()->assetManager;
			$this->assetsUrl = $am->publish(Yii::app()->viewPath.DIRECTORY_SEPARATOR.'assets');
		}

		return parent::beforeRender($view);
	}

	public function filters()
	{
		return array(
			'accessControl',
		);
	}

	public function accessRules()
	{
		return array(
			array(
				'allow',
				'actions' => array('login'),
				'users' => array('*'),
			),
			array(
				'deny',
				'users' => array('?'),
			),
		);
	}

	public function actionIndex()
	{
		$model = new Subscription('search');
		if (isset($_GET['Subscription']))
		{
			$model->attributes = $_GET['Subscription'];
		}
		$this->render('index', array(
			'model' => $model,
		));
	}

	public function actionLogin()
	{
		$model = new LoginForm;
		if (isset($_POST['LoginForm']))
		{
			$model->attributes = $_POST['LoginForm'];
			if ($model->validate() && $model->login())
			{
				$this->redirect(Yii::app()->user->returnUrl);
			}
		}
		$this->render('login', array('model' => $model));
	}

	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}

}