<?php
require './globals.php';

echo '<h2>operators.php</h2>';

hr();

// Arithmetic operators
echo '<h4>Arithmetic operators</h4>';
echo '
<pre>
echo "(1 + 2) == "; var_dump(1 + 2);
echo "(1 * 2) == "; var_dump(1 * 2);
echo "(1 / 2) == "; var_dump(1 / 2);
echo "(1 % 2) == "; var_dump(1 % 2);
</pre>';
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
</pre>';
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
</pre>';
echo '<div>(1 and 2) == '; var_dump(1 and 2).'</div>';
echo '<div>(1 or 2) == '; var_dump(1 or 2).'</div>';
echo '<div>(1 xor 2) == '; var_dump(1 xor 2).'</div>';
