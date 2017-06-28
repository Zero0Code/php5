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
	print $person->getName();

?>