<?php

class DefaultController extends NewsController
{
	public function actionIndex()
	{
		$this->render('index');
	}
}