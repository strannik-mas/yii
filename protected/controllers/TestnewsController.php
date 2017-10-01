<?php
class TestnewsController extends Controller{
	public function actionIndex()
{
    $model=new News;

    // uncomment the following code to enable ajax-based validation
    /*
    if(isset($_POST['ajax']) && $_POST['ajax']==='news-index-form')
    {
        echo CActiveForm::validate($model);
        Yii::app()->end();
    }
    */

    if(isset($_POST['News']))
    {
        $model->attributes=$_POST['News'];
        if($model->validate())
        {
            // form inputs are valid, do something here
            return;
        }
    }
    $this->render('index',array('model'=>$model));
}
public function actionData(){
	$model = new Test;
	
	//print_r($model->getData());
	$output = $this->render("data", array("model" => $model), false); //третий параметр для возврата результата в переменную
	//echo $output;
}
	public function actions()
		{
			return array(
				'rendertable' => array(
					'class' => 'application.actions.RendertableAction',
					//псевдоним пути
					'pageSize' => 20,
				)
			);
		}
	public function actionPath()
	{
		//webroot
		//application
		//ext
		//system
		
		$path_application = Yii::getPathOfAlias("actions");
		echo $path_application;
	}
	public function actionUrl()
	{
		//$url = new Url;
		$url = Yii::app()->url_test;
		print_r($url->getAlias());
	}
	public function actionVendor()
	{
		//Yii::import("application.vendors.*");
		
		$image = new Image;
		$image->renderImage();
	}
	public function actionFile()
	{
		$this->render("file");
	}
}