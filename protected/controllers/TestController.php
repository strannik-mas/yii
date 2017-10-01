<?php

class TestController extends Controller
{
	public function init()
	{
	}
	protected function afterRender($view, $output)
	{
		print "После рендера";
		return parent::afterRender($view, $output);
	}
	public function actionIndex(){
		//print Yii::app()->params['hash_key'];
		//print "Hello, World!";
		 
		//render
		//renderPartial
		
		//select email from users
		//update users set email = 'faaffafaf';
		$this->render("index"); //подключает layout и вьюшку
		//$this->renderPartial("index"); // без layout, только вьюшка
	}
	
	
}
