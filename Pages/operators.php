<h3 class="h3__title"> Operators </h3>

<section class="example__section">
	<h5>Create an example of use for arithmetic operators: +, -, *, /, and %</h5>
	<pre>
$a = 10;
$b = 2;
$c = 4;

$plus = $a + $b;
$less = $a - $b;
$divide = $c / $b;
$rest = $a % $b;

var_dump($plus, $less, $divide, $rest);
	</pre>
	<p>Result</p>
	<?php
	$a = 10;
	$b = 2;
	$c = 4;
	$plus = $a + $b;
	$less = $a - $b;
	$divide = $c / $b;
	$rest = $a % $b;
	var_dump($plus, $less, $divide, $rest);
	?>
</section>

<section class="example__section">
	<h5>Create a usage example for comparison operators: ==,! =, <,>, <=,> = </h5>
	<pre>
$a = 10;
$b = 2;

var_dump($a == $b, $a != $b, $a < $b, $a > $b,$a <= $b, $a >= $b);
	</pre>
	<p>Result</p>
	<?php
	$a = 10;
	$b = 2;
	var_dump($a == $b, $a != $b, $a < $b, $a > $b, $a <= $b, $a >= $b);
	?>
</section>

<section class="example__section">
	<h5>Create an example of use for logical operators: &&, And; ||, Or; ! (NOT); Xor</h5>
	<pre>
function foo()
{
	$a = true;
	$b = false;

	if ($a || $b == true) {
		echo "One of them is true";
	} else if ($a && $b == true) {
		echo "Both of them are true";
	} else if ($a xor $b == true) {
		echo "if $a or $b are true, but just one of them";
	} else if (!$a == true) {
		echo "Is true";
	}
}

var_dump(foo());
	</pre>
	<p>Result</p>
	<?php
	function foo()
	{
		$a = true;
		$b = false;

		if ($a || $b == true) {
			echo "One of them is true";
		} else if ($a && $b == true) {
			echo "Both of them are true";
		} else if ($a xor $b == true) {
			echo "if $a or $b are true, but just one of them";
		} else if (!$a == true) {
			echo "Is true";
		}
	}

	var_dump(foo());
	?>
</section>