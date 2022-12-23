<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File strings.php</title>
</head>

<body>
<a href="http://127.0.0.1/php-basics" style="text-decoration: none;background-color:black;color:white;">⮜Go Back</a>
    <h1>library of functionalities php</h1>
    <h2>php strings</h2>

    <?php

    print "Printing a text string <br>";

    $var = "Printing a text string that interpret variables";
    print $var . "<br>";

    $name = "Jhon";
    $age = 23;
    print "The age of $name is $age <br>";


    $strictlyPhrase  = "You should eat fruits, vegetables, and fiber every day.";
    $strictlyHealthy = array("fruits", "vegetables", "fiber");
    $strictlyYummy   = array("pizza", "chips", "ice cream");

    $strictlyNewPhrase = str_replace($strictlyHealthy, $strictlyYummy, $strictlyPhrase);
    print $strictlyNewPhrase . "<br>";


    $replacePhrase  = "You should eat fruits, vegetables, and fiber every day.";
    $replaceHealthy = array("fruits", "vegetables", "fiber");
    $replaceYummy   = array("pizza", "chips", "ice cream");

    $replaceNewPhrase = str_replace($replaceHealthy, $replaceYummy, $replacePhrase);
    print $replaceNewPhrase . "<br>";


    $i = 1;
    while ($i <= 6) :
        echo "This text will repeat it self <br>";
        $i++;
    endwhile;


    $textString = "awesome";
    echo "Awesome has " . strlen($textString) . " characters. <br>";


    $mystring = 'abcdefg';
    $findme   = 'e';
    $pos = strpos($mystring, $findme);
    echo $pos . "<br>";

    echo ucfirst("hello everyone") . "<br>";

    echo strtolower("I'm LOVING It to CODE") . "<br>";

    echo substr("abcdef", 2, -1) . " from abcdef";

    ?>

</body>

</html>