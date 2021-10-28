<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Conditionals</title>
	<style>
		.exercise {
			font-weight: bold;
		}
	</style>
</head>

<body>
	<p class="exercise">1. Create a simple condition that evaluates whether the current day is Monday. Only in the case that the condition is met, it shows a message of “We are on Monday”.</p>

	<?php
	// Create a simple condition that evaluates whether the current day is Monday. Only in the case that the condition is met, it shows a message of “We are on Monday”.

	$date = new DateTime();

	if ($date->format("N") === 1) echo "<p>We are on Monday</p>";
	?>

	<p class="exercise">2. Create a simple condition that evaluates whether the current month is October. If the condition is met, it shows a message of the type "We are in October". Otherwise, if this condition is not met, show the current month in words as it come from DateTime.</p>

	<?php
	// Create a simple condition that evaluates whether the current month is October. If the condition is met, it shows a message of the type "We are in October". Otherwise, if this condition is not met, show the current month in words as it come from DateTime.

	$date = new DateTime();
	$statement = ($date->format("m") == 10) ? "We are in October" : sprintf("We are not in October. It's %s", $date->format("F"));

	echo "<p>$statement</p>";
	?>

	<p class="exercise">3. Create a double condition that evaluates:</p>
	<ul class="exercise">
		<li>If the current minute is less than 10. Displays a message of type "the current minute is less than 10".</li>
		<li>If the current minute is greater than 15, displays a message of the type "the current minute is more than 15".</li>
		<li>If you do not meet any of the two conditions above: Displays a message of the type "does not meet any conditions”.</li>
	</ul>

	<?php
	// Create a double condition that evaluates:
	//- If the current minute is less than 10. Displays a message of type "the current minute is less than 10"
	//- If the current minute is greater than 15, displays a message of the type "the current minute is more than 15"
	//- If you do not meet any of the two conditions above: Displays a message of the type "does not meet any conditions

	$date = new DateTime();
	$min = $date->format("i");
	$statement = ($min < 10) ? "Current minute is less than 10." : (($min > 15) ? "Current minute is more than 15." : "Current minute doesn't meet any conditions.");

	echo "<p>$statement</p>";
	?>

	<p class="exercise">
		4. Create a switch type control structure to display a different message depending on the current day of the week. You can write any type of message, because the important thing is that you understand how it works and in what cases you can use it.
	</p>

	<?php
	// Create a switch type control structure to display a different message depending on the current day of the week. You can write any type of message, because the important thing is that you understand how it works and in what cases you can use it.

	$date = new DateTime();
	$month = $date->format("N");

	switch ($month) {
		case 1:
			echo "<p>It's Monday</p>";
			break;
		default:
			echo "<p>It's not Monday</p>";
	}
	?>
</body>

</html>