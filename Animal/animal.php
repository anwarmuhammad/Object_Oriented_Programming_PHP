<?php
// Error Reporting
// error_reporting(0);
error_reporting(E_ERROR | E_WARNING | E_PARSE);

class Animal {
	//property declaration
	public $name = "Cat";
	//method declaration
	public function displayName() {

		echo $this->name;
	}

}
/**
 *
 */
class Cat extends Animal {

}
// creating an instance
$cat = new Animal();
// $cat->displayName();
// calling statically leads to error
// Animal::displayName();

$assigned = $cat;
$reference = &$cat;

$cat = "new cat";

var_dump($cat); //$cat is updated
echo "<hr>";
var_dump($assigned); //assigned value is not updated
echo "<hr>";
var_dump($reference); //reference value is updated according to $cat updated value
$cat2 = new $cat;
// var_dump($cat === $cat2);