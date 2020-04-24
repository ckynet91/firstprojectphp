<?php

class MenController{

	public function actionIndex(){

		// echo 'Category: ' . $categoryId;
		// echo '<br>Page: ' . $page;

		$categories =[];
		// $categories = Category::getCategoriesList();

		$categoryProducts =[];
		$categoryProducts = Product::getProductsListByCategory(1, $page = 1);

		$total = Product::getTotalProductsInCategory(1);

		//Создадим объект Pagination постраничная навигация
		$pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');


		require_once(ROOT . '/views/men/index.php');

		return true;
	}
}