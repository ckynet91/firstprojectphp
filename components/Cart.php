<?php
class Cart{

	public static function addProduct($id){
		$id =intval($id);
		//Пустой массива для товара в корзине
		$productsInCart = [];
		//Если в корзине уже есть товар
		if(isset($_SESSION['products'])){
			//То заполняем массив товарами
			$productsInCart = $_SESSION['products'];
			//Если отовар есть в корзине, но был добавлен еще раз
			if(array_key_exists($id, $productsInCart)){
				$productsInCart[$id] ++;
			}else {
				//Добавляем нового товара в корзину

				$productsInCart[$id] = 1;
			}}
			$_SESSION['products'] = $productsInCart;

	}
	public static function countItems(){
		if(isset($_SESSION['products'])){
			$count = 0;
			foreach ($_SESSION['products'] as $id => $quantity){
				$count = $count + $quantity;
			}
			return $count;
		}else {
			return 0;
		}
	}

	public static function getProducts(){
		if(isset($_SESSION['products'])){
			return $_SESSION['products'];
		}
		return false;
	}
	public static function clear(){
		if(isset($_SESSION['products'])){
			unset($_SESSION['products']);
		}
	}
	public static function delete($id){

	 $productsInCart = [];
           $productsInCart = $_SESSION['products'];
           if(array_key_exists($id, $productsInCart)) {
            $productsInCart[$id]--;
           }
           if($productsInCart[$id]<=1){
               unset($productsInCart[$id]);
           }
           $_SESSION['products'] = $productsInCart;
            return self::countItems();
	}



	public static function getTotalPrice($products){
		$productsInCart = self::getProducts();
		$total = 0;
		if ($productsInCart){
			foreach ($products as $item) {
				$total += $item['price'] *$productsInCart[$item['id']];
			}
		}
		return $total;
	}

}