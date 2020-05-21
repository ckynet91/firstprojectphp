<?php
return array(
	'product/([0-9]+)' => 'product/view/$1', //actionView to ProductController
	'register' => 'user/register', //actionRegister to UserController
	'user/login' => 'user/login', //actionLogin to UserController
	'user/logout' => 'user/logout', //actionLogout to UserController
	'cabinet/edit' => 'cabinet/edit', //actionEdit to CabinetController
	'cabinet' => 'cabinet/index', //actionIndex to CabinetController
	'catalog' => 'catalog/index', // actionIndex to CatalogController

	'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2', // actionCategory to CatalogController
	'cart/add/([0-9]+)' => 'cart/add/$1', // actionAdd to CartController
	'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1', // actionAddAjax to CarController

	'checkout' => 'cart/checkout', //actionCheckout to CartController
	'cart/delete/([0-9]+)' => 'cart/delete/$1', // actionDalete to CartController
	'cart' => 'cart/index', // actionIndex to CartController
	'ordercomplete' => 'cart/ordercomplete', //actionOrdercomplete to CartController

	'about' => 'site/about', //actionAbout to SiteController
	'contact' => 'site/contact', //actionContact to SiteController
	'men' => 'men/index', // actionIndex to MenControler
	'men/page-([0-9]+)' => 'men/index/$1', // actionIndex to MenControler
	'woman' => 'woman/index', // actionIndex to MenControler
	'woman/page-([0-9]+)' => 'woman/$1', // actionIndex to MenControler
	'' => 'site/index', //actionIndex to SiteController
);