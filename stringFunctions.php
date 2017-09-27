<?php
        echo '<h1>All about string functions</h1>';

	echo '<h2>checking for string input</h2>';

	$firstName = '';
	if (empty(firstName)){

	echo 'Please type in your first name<br>';

	}

	echo '<h2>Finding the length and substring </h2>';

	$name='Albert Einstein';
	$length=strlen($name);

	echo $length . "<br>";
	echo "First Name: " . substr($name, 0, 6) . "<br>";
	echo "Last Name: " . substr($name, -8, 8) . "<br>";

	echo '<h2>Searching for string</h2>';
	
	$info="I work and study, Study and Work<br>";
	echo strpos($info, 'work') . "<br>";
	echo strpos($info, 'study') . '<br>';
	echo stripos($info, 'study') . '<br>';
	echo strripos($info, 'work') . '<br>';
	echo strpos($info, 'Work') . '<br>';

	echo '<h2>Replacing strings</h2>';
	
	$phone="201.988.2686<br>";
	$msg="Hello Moto!<br>";
	echo $msg;
	//echo str_replace('.', '-', $phone);
	echo str_ireplace('moto', 'World', $msg);
	
	echo '<h2>Functions for modifying strings</h2>';

	//$word='Hello World';
	echo trim('  Hello  ') . '<br>';
	echo lcfirst('Hello') . '<br>';
	echo ucfirst('hello world') . '<br>';
	echo strtoupper('hello world') . '<br>';
	echo strtolower('HELLO WORLD') . '<br>';

	echo '<h2>Repeating string</h2>';

	$emotion='Love';
	echo str_repeat($emotion, 5);

	echo '<h2>Functions for converting between character and integers</h2>';

	$num=7;
	echo chr($num) . '<br>';
	
	$c=P;
	echo ord($c) . '<br>';
	
	echo '<h2>Functions for comparing strings</h2>'

	echo strcmp("Hello", "hello") . '<br>';
	echo strcmp("hello", "hello") . '<br>';
	echo strcmp("hello", "Hello") . '<br>';
	echo strcmp("2hello", "10hello") . '<br>';
	echo strnatcmp("2hello", "10hello") . '<br>';
	echo strnatcasecmp("hello2", "hello10") . '<br>';
	
	echo '<h2>Functions for converting integers and strings</h2>';

	echo (int)'7' . '<br>';
	echo (int)'98.5' . '<br>';
	echo (int)'80 miles' . '<br>';
	echo (int)'5,523' . '<br>';
	echo (int)'feet' . '<br>';

	





?>

