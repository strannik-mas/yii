<?php
class RendertableAction extends CAction{
	public $pageSize = 10;
	//обязательный метод - тут пишем код для экшна
	public function run(){
		//print "i'am single action";
		
		Yii::app()->controller->render("application.actions.views.rendertable",array("pageSize" => $this->pageSize));
	}
	
}