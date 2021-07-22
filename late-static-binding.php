<?php
class DB
{
	public static $table='basetable';
	
	Public function select()
	{
		
		echo "SELECT * FROM ".static::$table;
	}
	
	Public function insert()
	{
		
		echo "INSERT INTO  ".static::$table;
	}

}

class abc extends DB
{
	public static $table='abc';
	
	
}

class user extends DB
{
	public static $table='user';
	
	
}

$db = new DB;
$db->select();
echo "<br>";
$abc = new abc;
$abc->select();
echo "<br>";
$user = new user;
$user->select();


?>