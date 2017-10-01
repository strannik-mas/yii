<?php
class Test extends CModel{
	public $id;
	public $title;
	public $description;
	public function attributeNames(){
		return array();
	}
	public function getData()
	{
		return array(
		array("title" => "Новость 1",
			"description" => 'Текст первой новости'),
		array("title" => "Новость 2",
			"description" => 'Текст второй новости'),
		array("title" => "Новость 3",
			"description" => 'Текст третей новости'),
			);
	}
	public function attributeLabels(){
		return array(
			'id' => "ID",
			'title' => "Заголовок",
			'description' => "Описание",
		);
	}
}
?>