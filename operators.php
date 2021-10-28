<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Operators</title>
</head>

<body>
	<!-- Create an example of use for arithmetic operators: +, -, *, /, and % -->
	<h2>Arithmetic operations</h2>
	<p>16 + 5 = <?php var_dump(16 + 5) ?></p>
	<p>16 - 5 = <?php var_dump(16 - 5) ?></p>
	<p>16 * 5 = <?php var_dump(16 * 5) ?></p>
	<p>16 / 5 = <?php var_dump(16 / 5) ?></p>
	<p>16 % 5 = <?php var_dump(16 % 5) ?></p>

	<!-- Create an example of use for comparison operators: ==,! =, <,>, <=,> = -->
	<h2>Comparison operations</h2>
	<p>16 &gt; 5 is <?php var_dump(16 > 5) ?></p>
	<p>16 &lt; 5 is <?php var_dump(16 < 5) ?></p>
	<p>16 &lt;= 5 is <?php var_dump(16 <= 5) ?></p>
	<p>16 &gt;= 5 is <?php var_dump(16 >= 5) ?></p>
	<p>16 == 5 is <?php var_dump(16 == 5) ?></p>
	<p>16 != 5 is <?php var_dump(16 != 5) ?></p>

	<!-- Create an example of use for logical operators: &&, and; ||, or; ! (NOT); xor -->
	<h2>Logical operations</h2>
	<p>true and true is <?php var_dump(true && true) ?></p>
	<p>true and false is <?php var_dump(true and false) ?></p>
	<p>true or false is <?php var_dump(true || false) ?></p>
	<p>false or false is <?php var_dump(false or false) ?></p>
	<p>true xor true is <?php var_dump(true xor true) ?></p>
	<p>false xor false is <?php var_dump(false xor false) ?></p>
	<p>true xor false is <?php var_dump(true xor false) ?></p>
	<p>not true is <?php var_dump(!true) ?></p>
</body>

</html>