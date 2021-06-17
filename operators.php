<?php

echo '<br>example of 1+2</br>';
var_dump(1 + 2);
echo '<br>example of 1-2</br>';
var_dump(1 - 2);
echo '<br>example of 1*2</br>';
var_dump(1 * 2);
echo '<br>example of 1/2</br>';
var_dump(1 / 2);
echo '<br>example of 1%2</br>';
var_dump(1 % 2);
echo '<br>example of 1==2</br>';
var_dump(1 == 2);
echo '<br>example of 1!=2</br>';
var_dump(1 != 2);
echo '<br>example of 1<2</br>';
var_dump(1 < 2);
echo '<br>example of 1>2</br>';
var_dump(1 > 2);
echo '<br>example of 1<=2</br>';
var_dump(1 <= 2);
echo '<br>example of 1>=2</br>';
var_dump(1 >= 2);
echo '<br>example of (1==2 && 1<2)</br>';
var_dump(1 == 2 && 1 < 2);
echo '<br>example of (1==2 || 1<2)</br>';
var_dump(1 == 2 || 1 < 2);

echo '<br>example of !(1==2 || 1<2)</br>';
var_dump(!(1 == 2 || 1 < 2));

echo '<br>example of XOR (!(1==2) || !(1<2))</br>';
var_dump(!(1 == 2) || !(1 < 2));
