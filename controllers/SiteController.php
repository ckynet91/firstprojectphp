<?php

// require_once ROOT. '/models/Category.php';
// require_once ROOT . '/models/Product.php';

class SiteController
{
	public function actionIndex(){

		$categories = [];
		// $categories = Category::getCategoriesList();

		$latestProduct = [];
		$latestProduct = Product::getLatesProducts(5);
		
		require_once(ROOT. '/views/site/index.php');

		return true;
	}

	public function actionAbout(){

		require_once(ROOT . '/views/site/about.php');

		return true;
	}

		public function actionContact(){

				$userName = '';
				$userLastName = '';
				$userEmail = '';
				$subject = '';
				$message = '';

				$result = false;

			if(isset($S_POST['submit'])){

				$userName = $_POST['fname'];
				$userLastName = $_POST['lname'];
				$userEmail = $_POST['email'];
				$subject = $_POST['subject'];
				$message = $_POST['message'];

			$mail = 'Имя отправителя: ' . $userName . '<br>Фамилия отправителя: ' . $userLastName . '<br>Тема письма: ' . $subject . '<br>Тело сообщения' . $message;
			$result = mail($userName, $subject, $mail);
			}

		require_once(ROOT . '/views/site/contact.php');

		return true;
	}
}