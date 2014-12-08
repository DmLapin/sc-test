<?php

class FrontBaseController extends CController {

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

} 