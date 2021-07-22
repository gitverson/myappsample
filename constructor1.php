<?php
class BaseClass
{

	function __construct()
	{
		echo "Base/Parent Class constructor <br>";;
	
	}
	
	function __destruct()
	{
		echo "Base Class destructor Destory ". __CLASS__."<br>" ;
		
	}
}

//$obj_base= new BaseClass;
//$obj_base= null;#destroy the object

class ChildClass extends BaseClass
{
	function __construct()
	{
		parent::__construct();
		
		echo "Child Class constructor <br>";;
		
	}
	
	function __destruct()
	{    parent::__destruct();
		echo "Child Class destructor Destory ". __CLASS__;
		
	}
	
}

/*if child class have no constructor. parent class have constructor. 

if u create a child class object then parent class constructor automatically call at the time of creating object.

*/

$obj_child = new ChildClass;
$obj_child=null;

?>