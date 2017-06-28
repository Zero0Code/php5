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
		function Person($naem)
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
?>