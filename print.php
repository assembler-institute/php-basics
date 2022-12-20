<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File print.php</title>
</head>

<body>
<a href="http://127.0.0.1/php-basics" style="text-decoration: none;background-color:black;color:white;">⮜Go Back</a>
    <h1>library of functionalities php</h1>
    <h2>php "echo" instructions</h2>

    <?php

        echo "echo does not require parentheses.";

        echo 'This ', 'string ', 'was ', 'made ', 'with multiple parameters.', "\n";
        echo 'This ' . 'string ' . 'was ' . 'made ' . 'with concatenation.' . "\n";

        echo "hello";
        echo "world";

        echo "hello", "world";

        echo "This string spans
        multiple lines. The newlines will be
        output as well";

        echo "This string spans\nmultiple lines. The newlines will be\noutput as well.";

        $foo = "example";
        echo "foo is $foo";

        $fruits = ["lemon", "orange", "banana"];
        echo implode(" and ", $fruits);

        echo 6 * 7;
        
    ?>



    <br><br>
    <h2>php "print" instructions</h2>

    <?php
    
        print "print does not require parentheses.";

        print "hello";
        print "world";

        print "This string spans
        multiple lines. The newlines will be
        output as well";

        print "This string spans\nmultiple lines. The newlines will be\noutput as well.";

        $foo = "example";
        print "foo is $foo";

        $fruits = ["lemon", "orange", "banana"];
        print implode(" and ", $fruits);

        print 6 * 7;

        if ( print "hello" ) {
            echo " world";
        }

        ( 1 === 1 ) ? print 'true' : print 'false';
        
    ?>



    <br><br>
    <h2>php "print_r" instructions</h2>

    <?php
    
        $a = array ('a' => 'apple', 'b' => 'banana', 'c' => array ('x', 'y', 'z'));
        print_r ($a);
        
    ?>

</body>
</html>
