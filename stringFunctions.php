<<?php
        echo '<h1>All about string functions</h1>';

	echo '<h2>checking for string input</h2>';

	$firstName = '';
	if (empty(firstName)){

	echo 'Please type in your first name<br>';

	}

	echo '<h2>Finding the length and substring </h2>';

	$name='Albert Einstein';
	$length=strlen($name);

	echo $length"<br>";
	echo "First Name: " . substr($name, 0, 6) . "<br>";
	echo "Last Name: " . substr($name, -8, 8) . "<br>";

	echo '<h2>Searching for string</h2>';
	
	$info="I am work and study<br>";
	echo strpos($info, 'work') . '<br>';
	echo strpos($info, 'study') . '<br>';

	echo '<h2>Modifying strings</h2>
	
	


?>

