<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP - Operators</title>
</head>
<body>
  <?php
require './globals.php';

echo '<h2>PHP - Operators</h2>';

hr();

// Arithmetic operators
echo '<h4>Arithmetic operators</h4>';
echo '
<pre>
echo "(1 + 2) == "; var_dump(1 + 2);
echo "(1 * 2) == "; var_dump(1 * 2);
echo "(1 / 2) == "; var_dump(1 / 2);
echo "(1 % 2) == "; var_dump(1 % 2);
</pre> ==> ';
echo '<div>(1 + 2) == '; var_dump(1 + 2).'</div>';
echo '<div>(1 * 2) == '; var_dump(1 * 2).'</div>';
echo '<div>(1 / 2) == '; var_dump(1 / 2).'</div>';
echo '<div>(1 % 2) == '; var_dump(1 % 2).'</div>';

hr();

// Comparison operators
echo '<h4>Comparison operators</h4>';
echo '
<pre>
echo "(1 == 2) == "; var_dump(1 == 2);
echo "(1 != 2) == "; var_dump(1 != 2);
echo "(1 < 2) == "; var_dump(1 < 2);
echo "(1 > 2) == "; var_dump(1 > 2);
echo "(1 <= 2) == "; var_dump(1 <= 2);
echo "(1 >= 2) == "; var_dump(1 >= 2);
</pre> ==> ';
echo '<div>(1 == 2) == '; var_dump(1 == 2).'</div>';
echo '<div>(1 != 2) == '; var_dump(1 != 2).'</div>';
echo '<div>(1 < 2) == '; var_dump(1 < 2).'</div>';
echo '<div>(1 > 2) == '; var_dump(1 > 2).'</div>';
echo '<div>(1 <= 2) == '; var_dump(1 <= 2).'</div>';
echo '<div>(1 >= 2) == '; var_dump(1 >= 2).'</div>';

hr();

// Logical operators
echo '<h4>Logical operators</h4>';
echo '
<pre>
echo "(1 and 2) == "; var_dump(1 and 2);
echo "(1 or 2) == "; var_dump(1 or 2);
echo "(1 xor 2) == "; var_dump(1 xor 2);
</pre> ==> ';
echo '<div>(1 and 2) == '; var_dump(1 and 2).'</div>';
echo '<div>(1 or 2) == '; var_dump(1 or 2).'</div>';
echo '<div>(1 xor 2) == '; var_dump(1 xor 2).'</div>';

?>
</body>
</html>