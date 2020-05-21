<?php

class WomanController{

	public function actionIndex($id){

		// echo 'Category: ' . $categoryId;
		// echo '<br>Page: ' . $page;

		$categories =[];
		// $categories = Category::getCategoriesList();

		$categoryProducts =[];
		$categoryProducts = Product::getProductsListByCategory($id, $page = 1);

		$total = Product::getTotalProductsInCategory($id);

		//Создадим объект Pagination постраничная навигация
		$pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');


		require_once(ROOT . '/views/woman/index.php');

		return true;
	}
}