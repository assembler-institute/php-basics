<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = 24;
        $b = " hours";
        $mystring = 'bca';
        $findme   = 'a';
        print "Hello world!" . "<br/>";
        print "The day have " . $a . $b . "<br/>";
        print str_replace("world", "galaxy", "Hello world!") . "<br/>";
        print str_repeat("Hello world!", 3) . "<br/>";
        print strlen("Hello world!") . "<br/>";
        print strpos($mystring, $findme) . "<br/>";
        print strtoupper($b) . "<br/>";
        print strtolower($b) . "<br/>";
        print substr($b, 2, 4) . "<br/>";


    ?>
</body>
</html>