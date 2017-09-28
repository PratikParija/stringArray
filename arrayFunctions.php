<?php

	echo '<h1>All About Array Functions</h1>';

	echo '<h2>Indexed Array</h2>';

	$cars=array("Ferrari", "Porsche", "McLaren");

	echo $cars[0].'<br>';

	$cars = array(0);
	$cars[0]='Ferrari';
	$cars[1]='Porsche';
	$cars[2]='McLaren';

	echo $cars[2].'<br>';
	
	print_r($cars);
	echo '<br>';

	echo '<h2>Removing elements</h2>';

	unset($cars[1]);
	print_r($cars);
	echo '<br>';
	array_values($cars);
	print_r($cars);
	echo '<br>';

	echo '<h2>Associative Array</h2>';
	
	$age=array('John'=>25, 'Aisha'=>27, 'Daybala'=>19);
	echo $age['Aisha'] . '<br>';

	echo "Youngest person: {$age['Daybala']}";
	
	echo '<h2>Multidimentionl</h2>';

	$carInfo=array(
	array('Ferrari', 16, 15),
	array('McLaren', 8,12),
	array(
		array('mango', 10, 5)
		),
	);
	echo $carInfo[2][0][0] . '<br>';
	
	echo '<h2>Mixed Arrays</h2>';

	$values=array(0, 0.0, false, 'haha', array('Porsche', 12, 8));

	echo $values . '<br>';
	var_dump($values);
	echo '<br>';
	print_r($values);
	echo '<br>';

	$employees=array();
	$employees[0]='Anthony';
	$employees['position']='manager';

	echo count($employees).'<br>';
	unset ($employees);
	print_r($employees);
	echo '<br>';

	$number=range(0,5);
	print_r($number);
	echo '<br>';
	$number=range(0,5,2);
	print_r($number);
	echo '<br>';

	$num=array_fill(0,5,1);
	print_r($num);
	echo '<br>';
	$pad=array_pad($num,8,0);
	print_r($pad);
	echo '<br>';

	echo '<h2>Merge Array</h2>';

	$obj=range(0,3);
	$obj1=range(4,6);
	$merge=array_merge($obj, $obj1);
	print_r($merge);
	echo '<br>';

	echo '<h2>Slice array</h2>';

	$slice=array_slice($merge,2,3);
	print_r($slice);
	echo '<br>';
	echo array_sum($slice) . '<br>';

	echo '<h2>Sort Array</h2>';

	$name=array('Mike','Anne','Ray');
	sort($name);
	print_r($name);
	echo '<br>';
	rsort($name);
	print_r($name);
	echo '<br>';
	
	/*$taxRates=array('ny'=7.75, 'nj'=0.7, 'oregon'=0.0);
	asort($taxRates);
	print_r($taxRates);
	echo '<br>';

	ksort($taxRates);
	print_r($taxRates);
	echo '<br>';

	arsort($taxRates);
	print_r($taxRates);
	echo '<br>';

	krsort($taxRates);
	print_r($krsort);
	echo '<br>';*/


?>
