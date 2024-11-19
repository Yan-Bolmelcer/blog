<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		// Ищем пользователя по имени пользователя
		$user = User::model()->find('username=:username', array(':username' => $this->username));
		
		// Проверяем, существует ли пользователь
		if ($user === null) {
			$this->errorCode = self::ERROR_USERNAME_INVALID;
		}
		// Проверяем пароль с использованием md5 (не рекомендуется, но оставляем по вашим условиям)
		else if ($user->password !== md5($this->password)) {
			$this->errorCode = self::ERROR_PASSWORD_INVALID;
		}
		else {
			// Если аутентификация прошла успешно
			$this->errorCode = self::ERROR_NONE;
			
			// Сохраняем ID пользователя в сессии
			$this->setState('id', $user->id);

		}
	
		return !$this->errorCode;
	}
	
}
