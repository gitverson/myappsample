<?php
class TV
{
public $model;
public $volume;	
	
	function volumeUP()
	{
		
		$this->volume++;
	}
	
	function volumeDOWN()
	{
		
		$this->volume--;
	}
	
	function __construct($m,$v)
	{
		echo "Base/Parent Class constructor <br>";;
		$this->model=$m;
		$this->volume=$v;
	}
}
/* $tv_one = new TV('CRT Monitor TV',5);

echo $tv_one->model;
 */
class tvwithtimer extends TV
{
	public $timer=true;
	
	
	
	function __construct()
	{
		parent::__construct('CRT Monitor TV',5);
		echo $this->model;
		echo "Child Class constructor <br>";;
		
	}
	
	function __destruct()
	{
		echo "Child Class destructor ". __CLASS__ ;
		
	}
	
}

/*if child class have no constructor. parent class have constructor. 

if u create a child class object then parent class constructor automatically call at the time of creating object.

*/

$timer = new tvwithtimer();

//echo $timer->model;

//destroy the object
$timer=null;

?>