<?php
/* 
Polymorphism portrays an example in object-oriented programming where methods in various classes that do similar things should have a similar name. Polymorphism is essentially an OOP pattern that enables numerous classes with different functionalities to execute or share a commonInterface. The usefulness of polymorphism is code written in different classes doesn't have any effect which class it belongs because they are used in the same way. In order to ensure that the classes do implement the polymorphism guideline, we can pick between one of the two alternatives of either abstract classes or interfaces.

So let's implement the polymorphism principle with the help of the interface.
 */

   interface Machine {
      public function calcTask();
   }
   class Circle implements Machine {
      private $radius;
      public function __construct($radius){
         $this -> radius = $radius;
      }
      public function calcTask(){
         return $this -> radius * $this -> radius * pi();
      }
   }
   class Rectangle implements Machine {
      private $width;
      private $height;
      public function __construct($width, $height){
         $this -> width = $width;
         $this -> height = $height;
      }
      public function calcTask(){
         return $this -> width * $this -> height;
      }
   }
   $mycirc = new Circle(3);
   $myrect = new Rectangle(3,4);
   echo $mycirc->calcTask();
   echo "<br>";
   echo $myrect->calcTask();
?>