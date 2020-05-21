<?php

class WomanController{

	public function actionIndex(){

		// echo 'Category: ' . $categoryId;
		// echo '<br>Page: ' . $page;

		$categories =[];
		// $categories = Category::getCategoriesList();

		$categoryProducts =[];
		$categoryProducts = Product::getProductsListByCategory(2, $page = 1);

		$total = Product::getTotalProductsInCategory(2);

		//Создадим объект Pagination постраничная навигация
		$pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');


		require_once(ROOT . '/views/woman/index.php');

		return true;
	}
}