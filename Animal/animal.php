<?php
// Error Reporting
// error_reporting(0);
error_reporting(E_ERROR | E_WARNING | E_PARSE);

class Animal {
	//property declaration
	public $name = "Cat";
	private $name2;
	// Constant property declaration
	const NUMLEGS = 4;
	// Constructor
	public function __construct($name2 = "") {

		$this->name2 = $name2;

		print "Animal Class Constructor\n";
	}
	public function __destruct() {
		print "Destroying " . $this->name . "\n";
	}
	//method declaration
	public function displayName() {

		echo $this->name2;
	}
	public function displayLegs() {
		echo self::NUMLEGS;
	}

}

// Creating Child Class
class Cat extends Animal {
// method overriding
	public function displayName() {

		echo "Calling from Child <hr>";
		// Accessing overriden method using Parent Keyword
		parent::displayName();

	}

	public function __construct() {

		parent::__construct();
		print "Child Class Constructor\n";

	}
	public function __destruct() {
		parent::__destruct();
		print "Destroying Child" . $this->name . "\n";

	}

}
// create an instance
// Animal class Constructor is called
$cat = new Animal("Super Cat");
// Animal class Constructor is called
$childCat = new Cat();
echo "<hr>";
// property access
// public property
echo $cat->name . "<hr>";
//Constant property access using instance
echo $cat::NUMLEGS . "<hr>";
//property access w/o instance
echo Animal::NUMLEGS . "<hr>";

// Method Call
// accessing private property which is initialized through constructo
$cat->displayName();
echo "<hr>";

$cat->displayLegs();
echo "<hr>";

$childCat->displayName();
echo "<hr>";
// calling statically leads to error
// Animal::displayName();

$assigned = $cat;
$reference = &$cat;

// $cat = "new cat";

var_dump($cat); //$cat is updated
echo "<hr>";
var_dump($assigned); //assigned value is not updated
echo "<hr>";
var_dump($reference); //reference value is updated according to $cat updated value
