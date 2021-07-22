<?php
//Data Hiding : the concept of Encapsulation which is used for information hiding.
//Data security : Encapsulation helps in making data very robust and secured

class TV
{
protected $model; 
private $volume;

//private with in this class , not using by outside class , like example Mobile phone
//protected acess within this class / child class  , like example family car 
//Public access with in this class / child class /outside class( $obj->model),  like example govt bus

//public function FuncName or function FuncName , if u r not using public keyword in front of function Name, function by default is public.	
	
	Public function volumeUP()
	{
		
		$this->volume++;
	}
	
	Public function volumeDOWN()
	{
		
		$this->volume--;
	}
	
	protected function getModel()
	{		
		return $this->model;
		//$this->volume=$v;
	}
	
	Public function __construct($m,$v)
	{
		
		$this->model=$m;
		$this->volume=$v;
	}
}

class plazma extends TV 
{
//in child class access public /protected property	
	Public function getModel()
	{		
		return $this->model;
	}
	
}

$tv_one = new plazma('CRT Monitor TV',5);

 //object only access public property. Object can not access Private/Protected Property
 
 
echo $tv_one->getModel();



?>