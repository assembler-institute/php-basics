<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dates</title>
</head>

<body>
	<?php
	// Instance the Date Time class and then invoke the format method with the argument “Y-m-d” to show year-month-day.

	$date = new DateTime();
	?>


	<!-- Get the current date in any format -->
	<p>Current date: <?= $date->format("Y-m-d") ?></p>

	<!-- Get the current day -->
	<p>Current day: <?= $date->format("d") ?></p>

	<!-- Get the current month in numerical format (1-12) -->
	<p>Current month: <?= $date->format("m") ?></p>

	<!-- Get the current minute with leading zeros (00 - 59) -->
	<p>Current minute: <?= $date->format("i") ?></p>
</body>

</html>