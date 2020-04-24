<?php

class MenController{

	public function actionIndex(){


		require_once(ROOT . '/views/men/index.php');

		return true;
	}
}