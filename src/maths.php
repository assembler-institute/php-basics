<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maths</title>
</head>
<body>
  <div>
		<h2>Maths PHP</h2>
		<p>
			<?php
				// Use of abs() function to get absolute value
				$myNumber = -4;
				$myAbsNumber = abs($myNumber);
				echo "The absolute value of $myNumber is $myAbsNumber";
			?>
		</p>
		<p>
			<?php
				// Use of ceil() function to get highest rounded value
				$myNumber = 4.3;
				$myRoundedNumber = ceil($myNumber);
				echo "The highest rounded value of $myNumber is $myRoundedNumber";
			?>
		</p>
		<p>
			<?php
				// Use of max() function to get maximum value
				$mySerie = array(10, 5, 7, 2, 25);
				$myHighestSerie = max($mySerie);
				echo "The maximum value of the array is $myHighestSerie";
			?>
		</p>
		<p>
			<?php
				// Use of min() function to get minimum value
				$mySerie = array(10, 5, 7, 2, 25);
				$myLowestSerie = min($mySerie);
				echo "The minimum value of the array is $myLowestSerie";
			?>
		</p>
		<p>
			<?php
				// Using of rand() to get random value
				$maxValue = 10;
				$minValue = 1;
				$randValue = rand($minValue, $maxValue);
				echo "Random value between $minValue and $maxValue: $randValue";
			?>
		</p>
	</div>
</body>
</html>