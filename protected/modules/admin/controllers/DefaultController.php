<?php

class DefaultController extends Controller
{
	//public $layout = "main";
	public function actionIndex()
	{
		//$this->layout = "main2";
		//$this->render('index');
		//print Yii::app()->controller->module->pageSize;
		$this->render('index',array(
			'pageSize' => Yii::app()->controller->module->pageSize,
		
		));
	}
}