<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strings</title>
</head>
<body>
    <?php
    print "This is a text string";
    $var = "This is also a string";
    print_r($var);
    print $var." more text";
    print str_replace("string","different thing",$var);
    print str_ireplace("this","That one",$var);
    print str_repeat("Repeat",4);
    print strlen("Hello");
    print strpos("New York", "York");
    print ucwords("what a time to be alive");
    print strtolower("HELLO How ARE You?");
    print substr("abcdefghijk",2,3);
    ?>
</body>
</html>