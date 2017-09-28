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

	unset($cars[1]);
	print_r($cars);
	array_values($cars);
	print_r($cars);

	echo '<h2>Associative Array</h2>';
	
	$age=array('John'=>25, 'Aisha'=>27, 'Daybala'=>19);
	echo $age['Aisha'] . '<br>';
	
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

	$employee=array();
	$employee[0]='Anthony';
	$employee['position']='manager';
?>
