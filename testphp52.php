﻿<!-- 在html中嵌入php -->
<html>
	<head>
		Sample PHP Script
	</head>
	<body>
		The following prints "Hello,World";
		<?php
			print "Hello,World";
		?>
	</body>
</html>

<?php
		echo "<br>";
		# Shell方式注释
		// C++风格注释
		/*
		*  C风格注释
		*/
		// $PI = 3.14;
		// $radius = 5;
		// $circumference = $PI * 2 * $radius;
		// echo $circumference;
		// echo "<br>";

		$PI = 3.14;
		$radius = 5;
		$circumference = $GLOBALS["PI"] * 2 * $GLOBALS["radius"];
		echo $circumference;
		echo "<br>";

		$name = "John";
		$$name = "Registered user";
		print $John;
		echo "<br>";
		print $name;
		echo "<br>";

		#isset()用来判断某个变量是否已经被PHP声明
		// $first_name=1;
		if(isset($first_name)){
			print '$first_name is set';
		}

		#unset() 取消定义
		$name = "John Doe";
		unset($name);
		if (isset($name)) {
			print ' $name is set';
		}

		#empty()可以用来检测一个变量是否没被声明或者值是false
		if (empty($name)) {
			print 'Error: Forgot to specify a value for $name';
		}
		echo "<br>";

		//打印出“Andi”
		$str = "A";
		$str{2} = "d";
		$str{1} = "n";
		// $str{4} = "k";
		$str = $str . "i";
		print $str;
		echo "<br>";

		$numerator = 1;
		$denominator = 5;
		if ($denominator == 0) {
			print "The denominator needs to be a non-zero number \n";
		} 

		if ($denominator) {
			print "hhh \n";
		} else {
			print "The denominator nees to be a non-zero number \n";
		}

		echo "<br>";
		$arr1 = array(1,2,3);
		$arr2[0] = 1;
		$arr2[1] = 2;
		$arr2[2] = 3;
		$arr3[] = 1;
		$arr3[] = 2;
		$arr3[] = 3;
		print_r($arr1);
		echo "<br>";
		print_r($arr2);
		echo "<br>";
		print_r($arr3);
		echo "<br>";

		$sarr1 = array("name" => "John" , "age" => 28);
		$sarr2["name"] = "John";
		$sarr2["age"] = 28;
		if ($sarr1 == $sarr2){
			print '$sarr1 and $sarr2 are the same'."\n";
		}
		echo "<br>";

		print $sarr2["name"];
		if ($sarr2["age"] < 35) {
			print " is quite young \n";
		}

		echo "<br>";
?>