<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Strings</title>
	<style>
		.exercise {
			font-weight: bold;
		}
	</style>
</head>

<body>
	<p class="exercise">1. Print a text string.</p>

	<p>
		<?php
		// Print a text string

		print("A text string.")
		?>
	</p>

	<p class="exercise">2. Print a text string that interpret variables.</p>
	<p>
		<?php
		//Print a text string that interpret variables

		$str = "string";
		printf("A text %s", $str);
		?>
	</p>

	<p class="exercise">3. Concatenate a previously declared variable in a text string.</p>
	<p>
		<?php
		// Concatenate a previously declared variable in a text string

		$str = "string";
		echo "A text " . $str . ".";
		?>
	</p>


	<p class="exercise">4. Execute the function that allows you to replace text in a string (case sensitive).</p>

	<?php
	// Execute the function that allows you to replace text in a string (case sensitive)

	$str = "Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...";
	echo str_replace("porro", "*****", $str);
	?>

	<p class="exercise">5. Execute the function that allows you to replace text in a string (without taking into account upper / lower case).</p>

	<?php
	// Execute the function that allows you to replace text in a string (without taking into account upper / lower case)

	$str = "Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...";
	echo str_ireplace("neque", "Lia", $str);
	?>

	<p class="exercise">6. Execute the function that allows you to write a text N times.</p>

	<?php
	// Execute the function that allows you to write a text N times

	$str = "Betelgeuse";
	echo str_repeat($str, 3);
	?>

	<p class="exercise">7. Execute the function that allows to obtain the length of a text string.</p>

	<?php
	// Execute the function that allows to obtain the length of a text string

	$str = "Betelgeuse";
	printf("The length of '%s' is %s", $str, strlen($str));
	?>

	<p class="exercise">8. Execute the function that allows to obtain the position of the first occurrence of a text within a text string.</p>

	<?php
	// Execute the function that allows to obtain the position of the first occurrence of a text within a text string

	$str = "Betelgeuse";
	printf("The first 'e' in '%s' is at position %d (Starting from 0)", $str, strpos($str, "e"));
	?>

	<p class="exercise">9. Execute the function that allows a text string to be capitalized.</p>

	<?php
	// Execute the function that allows a text string to be capitalized

	$str = "Betelgeuse my heart.";
	echo ucwords($str);
	?>

	<p class="exercise">10. Execute the function that allows you to transform a text string to lowercase.</p>

	<?php
	// Execute the function that allows you to transform a text string to lowercase

	$str = "Betelgeuse My Heart.";
	echo strtolower($str);
	?>

	<p class="exercise">11. Execute the function that allows to obtain a text substring from the position.</p>

	<?php
	// Execute the function that allows to obtain a text substring from the position

	$str = "Betelgeuse";
	echo substr($str, 5, 3);
	?>
</body>

</html>