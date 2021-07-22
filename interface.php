<?php

//if implementing interface in class you have to implement all method in class.
//if you are not implementing these mothod in class, then u will get the error.(( Fatal error: Class def contains 2 abstract methods and must therefore be declared abstract or implement the remaining methods (abc::test, abc::xyz)  )) 
//by default in interface all method are abstract method. dont use abstract keyword in interface

//example 1

interface abc
{
	public function test();
	public function xyz();
}
class def implements abc
{
	 public function test()
	{
	echo "test function";	
	}
	public function xyz()
	{
	echo "xyz function";	
	} 
}


##################################################################################

//example 2
//can not defined a variable in interface. error(( Fatal error: Interfaces may not include member variables ))
//can not defined Private/Protected Method in interface, only public function FunctionName();.  error(Fatal error: Access type for interface method testA::abc1() must be omitted )

interface testA 
{
	//public $data;
	// Private/Protected function abc1();
	public function abc();

}

interface testB 
{
	
public function xyz();
	
}

class testC implements testA,testB
{
	
	public function xyz()
	{
		echo "xyz function";
		
	}
	public function abc()
	{
		echo "abc function";
		
	}
	
}

$test=new testc;
$test->abc();






?>