<?php

# absolute value
$one = 2.8;
$two = 3;

var_dump(abs($one - $two));
echo '<br><br>';
var_dump(abs($one - 12));
echo '<br><br>';

# rounded value
var_dump(round($one - $two));
echo '<br><br>';
var_dump(round($one + 2));
echo '<br><br>';

# highest value
echo 'highest&nbsp', max($one, $two, 2.5, 7, -1);
echo '<br><br>';

# lowest value
echo 'lowest&nbsp', min($one, $two, 2.5, 7, -1);
echo '<br><br>';

# random number
echo rand($one, $two);

?>