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
?>