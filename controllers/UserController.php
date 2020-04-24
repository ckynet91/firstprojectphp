<?php

class UserController{

	public function actionRegister(){

		 $name = '';
		 $email ='';
		 $password = '';
		 $result = false;

		if(isset($_POST['submit'])){
			$name =$_POST['name'];
			$email = $_POST['email'];
			$password = $_POST['password'];

			$errors = false;

			if(!User::checkName($name)){
			$errors[] = 'Имя не должно быть короче 2-х символов';
			}
			if(!User::checkEmail($email)){
				$errors[] = 'Неправильны email';
			}
			if(!User::checkPassword($password)){
				$errors[] = 'Пароль не должно быть короче 6-х символов';
			}
			if(User::checkEmailExists($email)){
				$errors[] = 'Такой email уже существует';
			}

			if($errors == false){
				$result = User::register($name, $email, $password);

			}


		}




		require_once(ROOT . '/views/users/register.php');

		return true;
	}

	public function actionLogin(){

		$email = '';
		$password = '';

		if(isset($_POST['submit'])){
			$email = $_POST['email'];
			$password = $_POST['password'];

			$errors = false;

			//Валидация полей
			if (!User::checkEmail($email)){
				$errors[]= 'Неправильный eamil';
			}
			if (!User::checkPassword($password)){
				$errors[]= 'Пароль не должен быть короче 6-ти символов';
			}
			//Проверяем существует ли пользователь в базе
			$userId = User::checkUserData($email, $password);
			if($userId == false) {
				//Усли данные не правильные - показываем ошибку
				$errors[] = 'Неправильные данные для входа на сайт';
			} else {
				//Если данные правильные, запоминаем пользователя (сессия)
				User::auth($userId);
				// Перенаправляем пользователя в закрытую часть - кабинет
				header("Location: /cabinet/");
			}
		}

		require_once(ROOT . '/views/users/login.php');

		return true;

	}
		public function actionLogout(){

		unset($_SESSION["user"]);
		header("Location: /");
	}

}