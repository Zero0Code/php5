<!-- 在html中嵌入php -->
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
?>