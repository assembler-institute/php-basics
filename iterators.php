<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Iterators</title>
</head>

<body>
	<?php
	$list = ["banana", "kiwi", "orange", "lemon", "apple"];
	?>

	<ul type="none">
		<?php
		// Generate a snippet that makes use of for

		foreach ($list as $value) {
			echo "<li>$value</li>";
		}
		?>
	</ul>

	<ul type="square">
		<?php
		// Generate a snippet that makes use of foreach

		for ($i = 0; $i < count($list); $i++) {
			echo "<li>$list[$i]</li>";
		}
		?>
	</ul>

	<ul type="disc">
		<?php
		//Generate a snippet that uses while

		$j = 0;

		while ($j < count($list)) {
			echo "<li>$list[$j]</li>";

			$j++;
		}
		?>
	</ul>

	<ul type="circle">
		<?php
		//Generate a snippet that uses do while

		$k = 0;

		do {
			echo "<li>$list[$k]</li>";

			$k++;
		} while ($k < count($list))
		?>
	</ul>
</body>

</html>