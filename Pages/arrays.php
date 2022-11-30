<h3 class="h3__title"> Arrays </h3>

<section class="example__section">
	<h5>Define a simple array composed of text strings</h5>
	<pre>
$myArray = array("hola", "me llamo", "el paco");
	</pre>
	<p>Result</p>
	<?php
$myArray = array("hola", "me llamo", "el paco");
var_dump($myArray)
	?>
</section>

<section class="example__section">
	<h5>Define a simple array consisting of whole numbers and decimal numbers</h5>
	<pre>
$myArray = array(10, 20, 30.33);
var_dump($myArray)
	</pre>
	<p>Result</p>
	<?php
	$myArray = array(10, 20, 30.33);
	var_dump($myArray)
	?>
</section>

<section class="example__section">
	<h5>Define a multidimensional array</h5>
	<pre>
$cars = array (
array("Volvo",22,18),
array("BMW",15,13),
array("Saab",5,2),
array("Land Rover",17,15)
);
var_dump($cars)
	</pre>
	<p>Result</p>
	<?php
		$cars = array (
			array("Volvo",22,18),
			array("BMW",15,13),
			array("Saab",5,2),
			array("Land Rover",17,15)
		);
		var_dump($cars)
	?>
</section>

<section class="example__section">
	<h5>Execute the function that allows to obtain the length of an array</h5>
	<pre>
$comida = array('frutas' => array('naranja', 'plátano', 'manzana'),
		'verduras' => array('zanahoria', 'col', 'guisante'));

// Cuenta normal
echo count($comida);
	</pre>
	<p>Result</p>
	<?php
	$comida = array('frutas' => array('naranja', 'plátano', 'manzana'),
	'verduras' => array('zanahoria', 'col', 'guisante'));

// Cuenta recursiva
// echo count($comida, COUNT_RECURSIVE);
// Cuenta normal
echo count($comida);

	?>
</section>

<section class="example__section">
	<h5>Execute the function that allows to obtain the combination of two arrays</h5>
	<pre>
$array1    = array("color" => "red", 2, 4);
$array2    = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$resultado = array_merge($array1, $array2);
print_r($resultado);
	</pre>
	<p>Result</p>
	<?php
	$array1    = array("color" => "red", 2, 4);
	$array2    = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
	$resultado = array_merge($array1, $array2);
	print_r($resultado);
	?>
</section>

<section class="example__section">
	<h5>Execute the function that once is given an array return the last element of it</h5>
	<pre>
$fruits = array('manzana', 'plátano', 'arándano');
echo end($fruits); // arándano
	</pre>
	<p>Result</p>
	<?php
	$fruits = array('manzana', 'plátano', 'arándano');
	echo end($fruits); // arándano
	?>
</section>

<section class="example__section">
	<h5>Execute the function that once is given an array add a new element to the array in question</h5>
	<pre>
$pila = array("naranja", "plátano");
array_push($pila, "manzana", "arándano");
print_r($pila);
	</pre>
	<p>Result</p>
	<?php
	$pila = array("naranja", "plátano");
	array_push($pila, "manzana", "arándano");
	print_r($pila);
	?>
</section>