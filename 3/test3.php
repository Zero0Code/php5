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
//parent:: 父类 self:: 子类END

//接口
	interface Loggable 
	{
		function logString();
	}

	class Person implements Loggable 
	{
		private $name=2, $address, $idNumber=1, $age;
		function logString() {
			return "class Person: name = $this->name, ID = $this->idNumber\n";
		}
	}

	class Product implements Loggable
	{
		private $name=1, $price=3, $expiryDate;
		function logString()
		{
			return "class Product: name = $this->name, price = $this->price\n";
		}
	}

	function MyLog($obj)
	{
		if ($obj instanceof Loggable) {
			print $obj->logString();
		} else {
			print "Error: object doesn't support Loggable interface\n";
		}
	}

	$person = new Person();
	$product = new Product();
	echo "<br>";
	MyLog($person);
	echo "<br>";
	MyLog($product);
//接口END

//final 方法
	class MyBaseClass
	{
		final function idGenerator()
		{
			return $this->id++;
		}
		protected $id = 0;
	}
	//报错
	// class MyConcreteClass extends MyBaseClass
	// {
	// 	function idGenerator()
	// 	{
	// 		return $this->id +=2;
	// 	}
	// }
//final 方法END

//final Class
	final class MyBaseClass2
	{

	}
	//报错
	// class MyConcreteClass extends MyBaseClass2
	// {

	// }
//final ClassEND


//__toString()
	class Person2
	{
		function __construct($name)
		{
			$this->name = $name;
		}
		private $name;
	}

	$obj2 = new Person2("Andi Gutmans");
	// print $obj2;
	var_dump($obj2);

	class Person3
	{
		function __construct($name)
		{
           $this->name=$name;
		}

		function __toString()
		{
			return $this->name;
		}

		private $name;
	}

	$obj3 = new Person3("Andi Gutmans");
	print $obj3;
	echo "<br>";
	echo $obj3;
	echo "<br>";
//__toString()END

	class NullHandleException extends Exception
	{
		function __construct($message)
		{
			parent::__construct($message);
		}
	}

	function printObject($obj)
	{
		if ($obj == NULL) {
            throw new NullHandleException("print Object recived NULL object");
		}
		print $obj . "\n";
	}

    class MyName
    {
    	function __construct($name)
    	{
             $this->name = $name;
    	}

    	function __toString()
    	{
    		return $this->name;
    	}

    	private $name;
    }

    try{
    	printObject(new MyName("Bill"));
    	printObject(NULL);
    	printObject(new MyName("Jane"));
    } catch (Exception $exception) {
        print $exception->getMessage();
        print " in file " . $exception->getFile();
        print " on line " . $exception->getLine() . "\n";
    } catch (Exception $exception) {

    }


?>