<h3 class="h3__title"> Iterators </h3>
<section class="example__section">
	<h5>Generate a snippet that makes use of for</h5>
	<pre>
for ($i = 1; $i <= 10; $i++) {
	echo $i;
}
	</pre>
	<p>Result</p>
	<?php
		for ($i = 1; $i <= 10; $i++) {
			echo $i;
		}
	?>
</section>

<section class="example__section">
	<h5>Generate a snippet that makes use of foreach
</h5>
	<pre>
$array = array(1, 2, 3, 4);
foreach ($array as &$valor) {
    $valor = $valor * 2;
}
	</pre>
	<p>Result</p>
	<?php
		$array = array(1, 2, 3, 4);
		foreach ($array as &$valor) {
				$valor = $valor * 2;
		}
		print_r ($array);
		// $array ahora es array(2, 4, 6, 8)
		unset($valor); // rompe la referencia con el último elemento
	?>
</section>

<section class="example__section">
	<h5>Generate a snippet that uses while</h5>
	<pre>
$x = 1;

while($x <= 5) {
	echo "The number is: $x";
$x++;
}
	</pre>
	<p>Result</p>
	<?php
$x = 1;
while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}
	?>
</section>

<section class="example__section">
	<h5>Generate a snippet that uses do while</h5>
	<pre>
$i = 5;
do {
	echo "Mi variable es: $i";
	$i--;
} while ($i > 0);
	</pre>
	<p>Result</p>
	<?php
$i = 5;
do {
    echo "Mi variable es: $i <br>";
		$i--;
} while ($i > 0);
	?>
</section>