<?php

# PRINT A STRING
# 1
$string1 = 'This is a text string';
print $string1;
echo '<br><br>';

# 2
$string2 = 'Tour';
print 'Magical Mystery'.' '.$string2;
echo '<br><br>';


# REPLACE
$fruit = 'I like to eat apples';
print_r(str_replace('apples', 'oranges', $fruit));
echo '<br><br>';

# IREPLACE
$vegetables = 'I like Onions';
print_r(str_ireplace('oNIONS', 'carrots', $vegetables));
echo '<br><br>';

# REPEAT
$repeat = '1';
echo str_repeat($repeat, 35);
echo '<br><br>';

# LENGTH
$length = '123445 76 886 4547 7454 3';
echo strlen($length);
echo '<br><br>';

# WORD POSITION
echo strpos('I love to read books', 'to');
echo '<br><br>';

# UPPERCASE TEXT
echo strtoupper('my name is jeff');
echo '<br><br>';

# LOWERCASE TEXT
echo strtolower("AXIS: BOLD AS LOVE");
echo '<br><br>';

# TEXT SUBSTRING
echo substr('inaki',2);

?>