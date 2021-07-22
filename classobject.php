<?php
class TV
{
public $model='xyz';
public $volume=1;	
	
	function volumeUP()
	{
		
		$this->volume++;
	}
	
	function volumeDOWN()
	{
		
		$this->volume--;
	}
	
}
$tv_one = new TV;
$tv_two = new TV;

$tv_one->volumeUP();
$tv_two->volumeUP();
$tv_one->volumeDOWN();


//echo $tv_one->volume;
//echo $tv_two->volume;

 $tv_one->model='abc';
 echo $tv_one->model;
echo $tv_two->model;



?>