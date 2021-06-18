<h3 class="h3__title"> Strings </h3>

<section class="example__section">
	<h5>Print a text string</h5>
	<pre>
$myStringText = "This is a string text";
echo $$myStringText;
	</pre>
	<p>Result</p>
	<?php
	$myStringText = "This is a string text";
	echo $myStringText;
	?>
</section>

<section class="example__section">
	<h5>Print a text string that interpret variables</h5>
	<pre>
$myAge= 28;
print "Mi nombre es: Paquito y tengo $myAge";
	</pre>
	<p>Result</p>
	<?php
	$myAge= 28;
	print "Mi nombre es: Paquito y tengo $myAge";
	?>
</section>

<section class="example__section">
	<h5>Concatenate a previously declared variable in a text string
</h5>
	<pre>
$myArray= array("Paquito", 28);
print "Mi nombre es: $myArray[0] y tengo $myArray[1]";
	</pre>
	<p>Result</p>
	<?php
		$myArray= array("Paquito", 28);
		print "Mi nombre es: $myArray[0] y tengo $myArray[1]";
	?>
</section>

<section class="example__section">
	<h5>Execute the function that allows you to replace text in a string (case sensitive)</h5>
	<pre>
$var1 = "Hello";
$var2 = "hello";
if (strcasecmp($var1, $var2) == 0) {
		echo '$var1 is equal to $var2 in a case-insensitive string comparison';
}
	</pre>
	<p>Result</p>
	<?php
$var1 = "Hello";
$var2 = "hello";
if (strcasecmp($var1, $var2) == 0) {
		echo '$var1 is equal to $var2 in a case-insensitive string comparison';
}
	?>
</section>

<section class="example__section">
	<h5>Execute the function that allows you to replace text in a string (without taking into account upper / lower case)</h5>
	<pre>
$var1 = "Hello";
$var2 = "hello";
if (strcasecmp($var1, $var2) == 0) {
		echo '$var1 is equal to $var2 in a case-insensitive string comparison';
}
	</pre>
	<p>Result</p>
	<?php
	$var1 = "Hello";
	$var2 = "hello";
	if (strcasecmp($var1, $var2) == 0) {
			echo '$var1 is equal to $var2 in a case-insensitive string comparison';
	}
	?>
</section>

<section class="example__section">
	<h5>Execute the function that allows you to write a text N times</h5>
	<pre>
echo str_repeat("-=", 10);
	</pre>
	<p>Result</p>
	<?php
	echo str_repeat("-=", 10);
	?>
</section>

<section class="example__section">
	<h5>Execute the function that allows to obtain the length of a text string</h5>
	<pre>
$str = 'abcdef';
echo strlen($str);
	</pre>
	<p>Result</p>
	<?php
	$str = 'abcdef';
	echo strlen($str);
	?>
</section>

<section class="example__section">
	<h5>Executes the function that allows to obtain the position of the first occurrence of a text within a text string</h5>
	<pre>
$mystring = 'abcdefg';
$findme   = 'e';
$pos = strpos($mystring, $findme);
echo $pos;
	</pre>
	<p>Result</p>
	<?php
	$mystring = 'abcdefg';
	$findme   = 'e';
	$pos = strpos($mystring, $findme);
	echo $pos;
	?>
</section>

<section class="example__section">
	<h5>Execute the function that allows a text string to be capitalized</h5>
	<pre>
$str = "Mary Had A Little Lamb and She LOVED It So";
$str = strtoupper($str);
echo $str;
	</pre>
	<p>Result</p>
	<?php
	$str = "Mary Had A Little Lamb and She LOVED It So";
	$str = strtoupper($str);
	echo $str;
	?>
</section>

<section class="example__section">
	<h5>Execute the function that allows you to transform a text string to lowercase</h5>
	<pre>
$str = "Mary Had A Little Lamb and She LOVED It So";
$str = strtolower($str);
echo $str;
	</pre>
	<p>Result</p>
	<?php
	$str = "Mary Had A Little Lamb and She LOVED It So";
	$str = strtolower($str);
	echo $str;
	?>
</section>

<section class="example__section">
	<h5>Execute the function that allows to obtain a text substring from the position</h5>
	<pre>
$rest = substr("abcdef", -3, -1);
echo $rest;
	</pre>
	<p>Result</p>
	<?php
	$rest = substr("abcdef", -3, -1);
	echo $rest;
	?>
</section>