<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Maths</title>
	<style>
		.exercise {
			font-weight: bold;
		}
	</style>
</head>

<body>
	<p class="exercise">1. Define a variable whose value is the result of the function that returns an absolute value</p>

	<?php
	// Define a variable whose value is the result of the function that returns an absolute value

	$var = -5.4321;
	echo "<p>The absolute value of $var is: " . abs($var) . "</p>";
	?>

	<p class="exercise">2. Define a variable whose value is the result of the function that returns a rounded value to the next highest integer.</p>

	<?php
	// Define a variable whose value is the result of the function that returns a rounded value to the next highest integer

	$var = 5.4321;
	echo "<p>The rounded value of $var is: " . round($var) . "</p>";
	?>

	<p class="exercise">3. Define a variable whose value is the result of the function that returns the highest value of a series of values ​​that are received by parameter.</p>

	<?php
	// Define a variable whose value is the result of the function that returns the highest value of a series of values ​​that are received by parameter

	$list = [51, 32, 64, 22, 73, 96, 11, 85];
	$listStr = implode(", ", $list);

	echo "<p>The maximum value of $listStr is: " . max($list) . "</p>";
	?>

	<p class="exercise">4. Define a variable whose value is the result of the function that returns the lowest value of a series of values ​​that are received by parameter.</p>

	<?php
	// Define a variable whose value is the result of the function that returns the lowest value of a series of values ​​that are received by parameter

	$list = [51, 32, 64, 22, 73, 96, 11, 85];
	$listStr = implode(", ", $list);

	echo "<p>The minimum value of $listStr is: " . min($list) . "</p>";
	?>

	<p class="exercise">5. Define a variable whose value is the result of the function that returns a random number.</p>

	<?php
	// Define a variable whose value is the result of the function that returns a random number

	echo "<p>Random number between 1 and 100 (both inclusive): " . rand(0, 100) . "</p>";
	?>
</body>

</html>