<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Arrays</title>
	<style>
		.exercise {
			font-weight: bold;
		}
	</style>
</head>

<body>
	<?php
	$strList = ["foo", "bar", "baz", "boo", "meh"];
	$numList = [4, 4.5, 6.2, 7, 2.3];
	$matrix = [["John", 23], ["Maria", 19], ["Peter", 22]];
	?>

	<p class="exercise">1. Execute the function that allows to obtain the length of an array.</p>

	<p><?php echo count($strList) ?></p>

	<p class="exercise">2. Execute the function that allows to obtain the combination of two arrays.</p>

	<p><?php var_dump(array_combine($strList, $numList)) ?></p>

	<p class="exercise">3. Execute the function that once is given an array return the last element of it.</p>

	<p><?php echo array_pop($strList); ?></p>

	<p class="exercise">4. Execute the function that once is given an array add a new element to the array in question.</p>

	<p>
		<?php
		array_push($strList, "echo");
		var_dump($strList) ?>
	</p>
</body>

</html>