<?php

//static variable/static function is releted to class
// self::$variable_Name  is used within the class
class House
{
	public static $size;
	
	Public static function getSize()
	{
		
		Return self::$size;
	}
	
	Public static function setSize($s)
	{
		
		self::$size=$s;
	}

}

House::setSize(1200);

echo House::getSize();

echo "<br><br>";

########################################################################################


class abc
{
	public static $objectcount=0;
	
	public static function getcount()
	{
		return self::$objectcount;
		
	}
	public function __construct()
	{
		
		self::$objectcount++;
	}
}
$a = new abc;
$b = new abc;
$c = new abc;
//$d = new abc;

echo abc::getcount();


?>