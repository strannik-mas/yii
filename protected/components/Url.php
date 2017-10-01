<?php

class Url extends CApplicationComponent{
	public function init() //вместо конструктора
	{
		//print "инициализация<br>";
	}
	public function getAlias()
	{
		
		return array("news" => '/index.php?view=news',
					"contact" => '/index.php?view=contact',
		);
	}
}