<?php
function __autoload($class_name){
	#List all the class directories in the array.
	$array_paths =[
				'/models/',
				'/components/'
				];

	foreach ($array_paths as $path){
		$path = ROOT . $path . $class_name . '.php';
		if (is_file($path)){
			require_once $path;
		}
	}
}

 ?>