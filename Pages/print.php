<h3 class="h3__title"> Prints </h3>

<section class="example__section">
	<h5>Generate an instruction that makes use of "echo"</h5>
	<pre>
echo 'Este es un texto impreso con Echo';
	</pre>
	<p>Result</p>
	<?php
	echo "Este es un texto impreso con Echo";
	?>
</section>

<section class="example__section">
	<h5>Generate an instruction that makes use of "print"</h5>
	<pre>
print ("Este es un texto impreso con Print");
	</pre>
	<p>Result</p>
	<?php
	print("Este es un texto impreso con Print");
	?>
</section>

<section class="example__section">
	<h5>Generate an instruction that makes use of "print_r", it is important that you assign a complex value to analyze its potential
	</h5>
	<pre>
$a = array ('a' => 'manzana', 'b' => 'banana', 'c' => array ('x', 'y', 'z'));
print_r ($a);
	</pre>
	<p>Result</p>
	<pre>
<?php
$a = array('a' => 'manzana', 'b' => 'banana', 'c' => array('x', 'y', 'z'));
print_r($a);
?>
</pre>
</section>