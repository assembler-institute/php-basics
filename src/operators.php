<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Operators</title>
</head>

<body>
	<h2>Operators PHP</h2>
	<div>
		<?php
		// +, -, *, / and % operators
		$a = 5;
		$b = 1;
		$sum = $a + $b;
		$rest = $a - $b;
		$mult = $a * $b;
		$div = $a / $b;
		$mod = $a % $b;
		?>
		<p>
			<?php echo "$a + $b = $sum"; ?>
		</p>
		<p>
			<?php echo "$a - $b = $rest"; ?>
		</p>
		<p>
			<?php echo "$a * $b = $mult"; ?>
		</p>
		<p>
			<?php echo "$a / $b = $div"; ?>
		</p>
		<p>
			<?php echo "$a % $b = $mod"; ?>
		</p>

	</div>
	<div>
		<?php
		// Using comparison operators
		$a = 5;
		$b = 3;
		$c = 5;
		?>
		<p>
			<?php
			if ($a == $c) {
				echo "$c es igual que $a";
			}
			?>
		</p>
		<p>
			<?php
			if ($a != $b) {
				echo "$a no es igual que $b";
			}
			?>
		</p>
		<p>
			<?php
			if ($a > $b) {
				echo "$a es mayor que $b";
			}
			?>
		</p>
		<p>
			<?php
			if ($a >= $b) {
				echo "$a es mayor o igual que $b";
			}
			?>
		</p>
		<?php
		if ($b < $a) {
			echo "$b es menor que $a";
		}
		?>
		</p>
		<p>
			<?php
			if ($b <= $a) {
				echo "$b es menor o igual que $a";
			}
			?>
		</p>
	</div>
	<div>
		<?php
		// Using logical operators
		$a = 5;
		$b = 3;
		$c = 5;
		$d = 8;
		?>
		<p>
			<?php
			if ($d > $b && $d > $c) {
				echo "$d es mayor que $b y $c";
			}
			?>
		</p>
		<p>
			<?php
			if ($a > $b || $a > $c) {
				echo "$a es mayor que $b o $c";
			}
			?>
		</p>
	</div>
</body>

</html>