<?php
	class Person{
		var $name;
		function getName()
		{
			return $this->name;
		}
		function setName($name)
		{
			$this->name=$name;
		}
		function Person($name)
		{
			$this->setName($name);
		}
	}
	function changeName($person,$name)
	{
		$person->setName($name);
	}
	$person=new Person("Andi");
	changeName($person,"Stig");
	//php4 中 输出 Andi
	print $person->getName();


	final class FinalClass{

	}
	//final 不能被继承 会报错
	// class BogusClass extends FinalClass{
	// }
	echo "<br>";
	class MyClass{
		function __clone(){
			print "Object is being cloned";
		}
	}
	$obj = new MyClass();
	$obj_copy = clone $obj;
	// $obj_copy2 = clone $obj_copy;

	echo "<br>";
	class MyClass2 {
		const SUCCESS = "Success";
		const FAILUER = "Failure";
	}
	print MyClass2::SUCCESS;
	echo "<br>";

	class MyClass3 {
			static function helloWorld() {
				print  "Hello ,world";
			}
	}
	MyClass3::helloWorld();
	echo "<br>";

	class Singleton {
		static private $instance=NULL;

		private function __construct() {

		}

		static public function getInstance() {
			if (self::$instance == NULL){
				self::$instance = new Singleton();
			}
			return self::$instance;
		}
	}

	//抽象类
	abstract class MyBaseClass {
		function display() {
			print "Default display routine being called";
		}
		//抽象方法 子类要实现该方法
		abstract function display2();
	}

	class MyBaseClass2 extends MyBaseClass {
		function display2(){
			print "display2";
		}
		function expectsMyClass (MyClass $obj){

		}
	}

	$myBaseClass2=new MyBaseClass2();
	$myBaseClass2->display();
	echo "<br>";
	$myBaseClass2->display2();
	$myClass2=new MyClass2();
	//系统报错 对象类型
	// $myBaseClass2->expectsMyClass($myClass2);


	echo "<br>";
	//PHP5可以让你给传递引用的参数设置默认值	
	function my_func(&$arg = null) {
		if($arg === NULL){
			print '$arg is empty';
		}
	}
	my_func();
?>