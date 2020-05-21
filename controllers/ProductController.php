<?php

class ProductController{
	/**
	 * @param $productId
	 * @return mixid
	 */
	public function actionView($productId){

		$product = [];
		$product = Product::getProductById($productId);
		print_r($product);
		
		require_once(ROOT. '/views/product/view.php');
		return true;
	}
}