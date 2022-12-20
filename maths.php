<?php
require './globals.php';

echo '<h2>types.php</h2>';

hr();

// Absolute value
echo '<h4>Absolute value</h4>';
echo '
<pre>
echo abs(-10.2);
</pre> ==> ';
echo abs(-10.2);

hr();

// Round
echo "<h4>Round</h4>";
echo '
<pre>
echo ceil(0.85);
</pre> ==> ';
echo ceil(0.85);

hr();

// Highest number
echo "<h4>Return highest number</h4>";
echo '
<pre>
echo (max(array(3, 1, 15, 21, 55, 20)));
</pre> ==> ';
echo (max(array(3, 1, 15, 21, 55, 20)));

hr();

// Lowest number
echo "<h4>Return lowest number</h4>";
echo '
<pre>
echo (min(array(3, 1, 15, 21, 55, 20)));
</pre> ==> ';
echo (min(array(3, 1, 15, 21, 55, 20)));

hr();

// Random number
echo "<h4>Return a random number between 1 and 1000</h4>";
echo '
<pre>
echo (mt_rand(1, 1000));
</pre> ==> ';
echo (mt_rand(1, 1000));
