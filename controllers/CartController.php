<?php
 class CartController{

 	public function actionAdd($id){
 		//Добавляем товар в корзину
 		Cart::addProduct($id);
 		//Возвращаем пользователя на страницу
 		$referrer = $_SERVER['HTTP_REFERER'];
 		header("Location: $referrer");
 	}

 	public function actionAddAjax($id){
 		//Добавим товар в корзину
 		echo Cart::addProduct($id);
 		return true;
 	}

 	public function actionDelete($id){
 		//Удаляет товар из корзины
 		//
 		Cart::delete($id);
 		header("Location: /cart/");
 	}

 	public function actionIndex(){
 		$categories = [];
 		// $categories = Category::getCategoriesList();

 		$productsInCart = false;
 		$productsInCart = Cart::getProducts();

 		$productsIds = array_keys($productsInCart);

 		 $products = Product::getProductsByIds($productsIds);

 		$totalPrice = Cart::getTotalPrice($products);

 	require_once(ROOT . '/views/cart/index.php');
 	return true;
 	}

 	public function actionCheckout(){

 		$result = false;

 		if(isset($_POST['submit'])){
 			$userName = $_POST['fname'];
 			$userLastName = $_POST['lname'];
 			$userCompanyname = $_POST['companyname'];
 			$useraddress = $_POST['address'];
 			$useraddress2 = $_POST['address2'];
 			$usercity = $_POST['city'];
 			$userformcontrol = $_POST['formcontrol'];
 			$userzippostalcode = $_POST['zippostalcode'];
 			$useremail = $_POST['email'];
 			$userformcontrol = $_POST['formcontrol'];
 			$userPhone = $_POST['phone'];

 			if(!User::checkName($userName))
 				$errors[] = 'Неправильное имя';
 			if(!User::checkPhone($userPhone))
 				$errors[] = 'Неправильный телефон';

 			if($errors == false){
 				$productsInCart = Cart::getProducts();
 				if(User::isGuest()){
 					$userId = false;
 				}else{
 					$userId = User::checkLogged();
 				}
 				$result =Order::save($userName, $userPhone, $userComment, $userId, $products);
 				if($result){
 					$adminEmail = 'ckynet91@mail.ru';
 					$message = 'http://localhost/admin/orders';
 					$subject = 'Новый заказ';
 					mail($adminEmail, $subject, $message);

 					Cart::clear();
 				}
 			}else {
 				$productsInCart = Cart::getProducts();
 				$productsIds = array_keys($productsInCart);
 				$products = Products::getProductsByIds($productsIds);
 				$totalPrice = Cart::getTotelPrice($products);
 				$totalQuantity = Cart::countItems();
 			}
 		}else {
 			$productsInCart =Cart::getProducts();

 			if($productsInCart == false){
 				header("Location: /");
 			}else{
 				$productsIds = array_keys($productsInCart);
 				$products = Product::getProductsByIds($productsIds);
 				$totalPrice = Cart::getTotalPrice($products);
 				$totalQuantity = Cart::countItems();

 				$userName = false;
 				$userPhone = false;
 				$userComment = false;
 				if(User::isGuest()){

 				}else{
 					$userId =User::checkLogged();
 					$user =User::getUserById(UserId);

 					$userName =$user['name'];
 				}
 			}
 		}
 		require_once(ROOT . '/views/cart/checkout.php');
 		return true;
 	}

 	public function actionOrdercomplete(){

		require_once(ROOT . '/views/cart/ordercomplete.php');
 		return true;

 	}
 }