<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
    <!-- 
    Print a text string
    Print a text string that interpret variables
    Concatenate a previously declared variable in a text string
    Execute the function that allows you to replace text in a string (case sensitive)
    Execute the function that allows you to replace text in a string (without taking into account upper / lower case)
    Execute the function that allows you to write a text N times
    Execute the function that allows to obtain the length of a text string
    Executes the function that allows to obtain the position of the first occurrence of a text within a text string
    Execute the function that allows a text string to be capitalized
    Execute the function that allows you to transform a text string to lowercase
    Execute the function that allows to obtain a text substring from a given position
     -->
    <?php
    print "Something";

    $txt = "Some text";
    print $txt;
    echo '<br>';

    $txt2 = "Monday";
    print "Today is $txt2";
    echo '<br>';

    $sat = 'saturday';
    print 'My favorite day of the week is '.$sat;
    echo '<br>';

    $wrong = "lorem ipsum doler sit amet";
    echo str_replace('doler', 'dolor', $wrong);
    echo '<br>';

    $wrong2 = "lorem ipsum doler sit amet";
    echo str_replace('DOLER', 'dolor', $wrong2);
    echo '<br>';

    $repeatString = "Hyoyeon, ";
    echo str_repeat($repeatString, 3);
    echo "<br>";

    $strLen = "Badster by Hyoyeon";
    echo strlen($strLen);
    echo '<br>';

    $firstOcc = "Alattsa ttsa yari bidabiri ra baritz Ddan din dan den dan doo";
    echo strpos($firstOcc, "yari");
    echo "<br>";

    $upperCase = "Aespa";
    echo strtoupper($upperCase);
    echo '<br>';

    $lowerCase = "R.tee X Anda";
    echo strtolower($lowerCase);
    echo '<br>';

    $str = "Wa bali ttattaa Pari parii ladi bidi bidibidi Sutan den dan doo";
    echo substr($str, 15);
    
    ?>

</body>
</html>