<<?php
        echo '<h1>All about string functions</h1>';

	$firstName = '';
	if (empty(firstName)){

	echo 'Please type in your first name<br>';

	}

	$name='Albert Einstein';
	$length=strlen($name);

	echo $length"<br>";
	echo "First Name: " . substr($name, 0, 6) . "<br>";
	echo "Last Name: " . substr($name, -8, 8) . "<br>";

?>

