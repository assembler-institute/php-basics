<h3 class="h3__title"> Conditionals </h3>

<section class="example__section">
	<h5>Create a simple condition that evaluates whether the current day is Monday. Only in the case that the condition is met, it shows a message of “We are on Monday”.</h5>
	<pre>
$myDate = date("l");
if ($myDate == "monday") {
	echo "It's Monday!";
}
	</pre>
	<p>Result</p>
	<?php
	$myDate = date("l");
	if ($myDate == "monday") {
		echo "It's Monday!";
	}
	print ($myDate);
	?>
</section>

<section class="example__section">
	<h5>Create a simple condition that evaluates whether the current month is October. If the condition is met, it shows a message of the type "We are in October". Otherwise, if this condition is not met, show the current month in words as it come from DateTime.</h5>
	<pre>
$myDate = date("F");
if ($myDate == "October") {
	echo "It's October!";
} else {
	echo "Other month of the year";
}
	</pre>
	<p>Result</p>
	<?php
	$myDate = date("F");
	if ($myDate == "October") {
		echo "It's October!";
	} else {
		echo "Other month of the year";
	}
	?>
</section>

<section class="example__section">
	<h5>Create a double condition that evaluates:
		If the current minute is less than 10. Displays a message of type "the current minute is less than 10", if the current minute is greater than 15, displays a message of the type "the current minute is more than 15". If you do not meet any of the two conditions above: Displays a message of the type "does not meet any conditions"</h5>
	<pre>
$myDate = date("i");

if ($myDate < 10) {
	echo "the current minute is less than 10";
} else if ($myDate > 15) {
	echo "the current minute is more than 15";
} else {
	echo "does not meet any conditions";
}
	</pre>
	<p>Result</p>
	<?php
	$myDate = date("i");

	if ($myDate < 10) {
		echo "the current minute is less than 10";
	} else if ($myDate > 15) {
		echo "the current minute is more than 15";
	} else {
		echo "does not meet any conditions";
	}

	?>

</section>

<section class="example__section">
	<h5>Create a switch type control structure to display a different message depending on the current day of the week. You can write any type of message, because the important thing is that you understand how it works and in what cases you can use it.</h5>
	<pre>
$myDate = date("l");

switch ($myDate) {
	case "Monday":
		echo "Today is Monday";
		break;
	case "Tuesday":
		echo "Today is Tuesday";
		break;
	case "Wednesday":
		echo "Today is Wednesday";
		break;
	case "Thursday":
		echo "Today is Thursday";
		break;
	case "Friday":
		echo "Today is Friday";
		break;
	case "Sunday":
		echo "Today is Sunday";
		break;
	case "Saturday":
		echo "Today is Saturday";
		break;
}
	</pre>
	<p>Result</p>
	<?php
	$myDate = date("l");

	switch ($myDate) {
		case "Monday":
			echo "Today is Monday";
			break;
		case "Tuesday":
			echo "Today is Tuesday";
			break;
		case "Wednesday":
			echo "Today is Wednesday";
			break;
		case "Thursday":
			echo "Today is Thursday";
			break;
		case "Friday":
			echo "Today is Friday";
			break;
		case "Sunday":
			echo "Today is Sunday";
			break;
		case "Saturday":
			echo "Today is Saturday";
			break;
	}

	?>

</section>