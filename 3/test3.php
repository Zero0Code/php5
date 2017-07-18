<?php
	class MyClass {
		function __destruct()
		{
			print "An object of type MyClass is being destroyed\n";
		}		
	}

	$obj = new MyClass();
	$obj = NULL;

	class MyClass2 {
		static $myInitializedStaticVariable = 0;
		function myMethod()
		{
			print self::$myInitializedStaticVariable;
		}
	}
	$obj = new MyClass2();
	echo "<br>";
	$obj ->myMethod();

	class MyUniqueIdClass {
		static $idCounter = 0;
		public $uniqueId;

		function __construct()
		{
			self::$idCounter++;
			$this->uniqueId = self::$idCounter;
		}
	}
	$obj1 = new MyUniqueIdClass();
	echo "<br>";
	print $obj1->uniqueId. "\n";
	$obj2 = new MyUniqueIdClass();
	echo "<br>";
	print $obj2->uniqueId."\n";

	class PrettyPrinter {
		static function printHelloWorld(){
			print "Hello, World";
			self::printNewline();
		}

		static function printNewline()
		{
			print "\n";
		}
	}
	echo "<br>";
	PrettyPrinter::printHelloWorld();
	$obj = new PrettyPrinter();
	echo "<br>";
	$obj->printHelloWorld();

	class MyColorEnumClass{
		const RED = "Red";
		const GREEN = "Green";
		const BLUE = "Blue";

		function printBlue()
		{
			print self::BLUE;
		}
	}
	echo "<br>";
	print MyColorEnumClass::RED;
	$obj = new MyColorEnumClass();
	echo "<br>";
	$obj->printBlue();


	class MyClass3
	{
		public $var = 1;
	}

	$obj1 = new MyClass3();
	$obj2 = $obj1;
	$obj2->var = 2;
	echo "<br>";
	print $obj1->var;
	//PHP4 $obj1->var=1 PHP5 $obj1->var=2;

//克隆 	
	$obj1 = new MyClass3();
	$obj2 = clone $obj1;
	$obj2->var = 2;
	echo "<br>";
	print $obj1->var;
//克隆 	END


//多态
	class Cat
	{
		function miau()
		{
			print "miau";
		}
	}

	class Dog
	{
		function wuff()
		{
			print "wufff";
		}
	}

	function printTheRightSound($obj)
	{
		if ($obj instanceof Cat) {
			$obj->miau();
		} else if ($obj instanceof Dog) {
			$obj->wuff();
		} else {
			print "Error: Passed wrong kind of object";
		}
			print "\n";
	}
	echo "<br>";
	printTheRightSound(new Cat());
	echo "<br>";
	printTheRightSound(new Dog());
	//上面这个例子不可扩展

	//下面例子可扩展
	class Animal
	{
		public function makeSound()
		{
			print "Error: This method should be re-implemented in the children";
		}
	}

	class Cat2 extends Animal 
	{
		public function makeSound()
		{
			print "miau";
		}
	}

	class Dog2 extends Animal
	{
		public function makeSound()
		{
			print "wuff";
		}
	}

	function printTheRightSound2($obj)
	{
		if ($obj instanceof Animal) {
			$obj->makeSound();
		} else {
			print "Error: Passed wrong kind of object";
		}
		print "\n";
	}
	echo "<br>";
	printTheRightSound2(new Cat2());
	echo "<br>";
	printTheRightSound2(new Dog2());
//多态END

//parent:: 父类 self:: 子类
	class Ancestor
	{
		const NAME = "Ancestor";
		function __construct()
		{
			print "In" . self::NAME . "constructior\n";
		}
	}

	class Child extends Ancestor
	{
		const NAME = "Child";
		function __construct()
		{
			parent::__construct();
			print "In" . self::NAME . "constructior\n";
		}
	}
	echo "<br>";
	$obj = new Child();
//parent:: 父类 self:: 子类
?>