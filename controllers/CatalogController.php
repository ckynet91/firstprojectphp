<?php

// require_once ROOT. '/models/Category.php';
// require_once ROOT . '/models/Product.php';
// require_once ROOT . '/components/Pagination.php';

class CatalogController
{
	public function actionIndex(){

		$categories = [];
		// $categories = Category::getCategoriesList();

		$latestProduct = [];
		$latestProduct = Product::getLatesProducts(5);

		require_once(ROOT. '/views/catalog/index.php');

		return true;
	}
	public function actionCategory($categoryId, $page = 1){

		echo 'Category: ' . $categoryId;
		echo '<br>Page: ' . $page;

		$categories =[];
		// $categories = Category::getCategoriesList();

		$categoryProducts =[];
		$categoryProducts = Product::getProductsListByCategory($categoryId, $page);

		$total = Product::getTotalProductsInCategory($categoryId);

		//Создадим объект Pagination постраничная навигация
		$pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');

		require_once(ROOT. '/views/catalog/category.php');

		return true;
	}
}