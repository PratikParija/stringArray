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
	echo '<br>'

	echo '<h2>Associative Array</h2>';
	
	$age=array('John'=>25, 'Aisha'=>27, 'Daybala'=>19);
	echo $age['Aisha'] . '<br>';

	

?>
