<?php

class LoginForm extends CFormModel
{
	public $username;
	public $password;

	private $_identity;

	public function rules()
	{
		return array(
			array('username, password', 'required'),
			array('password', 'authenticate'),
		);
	}

	public function authenticate($attribute, $params)
	{
		if (!$this->hasErrors())
		{
			$this->_identity = new UserIdentityHardcoded($this->username, $this->password);
			if (!$this->_identity->authenticate())
			{
				$this->addError('password', 'Логин или пароль неверный');
			}
		}
	}

	public function login()
	{
		if ($this->_identity === null)
		{
			$this->_identity = new UserIdentityHardcoded($this->username, $this->password);
			$this->_identity->authenticate();
		}
		if ($this->_identity->errorCode === UserIdentityHardcoded::ERROR_NONE)
		{
			Yii::app()->user->login($this->_identity);
			return true;
		}
		else
		{
			return false;
		}
	}
}
