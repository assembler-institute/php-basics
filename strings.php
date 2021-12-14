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
    $myString = "Hi world";

    //Print a text string
    echo "<h2>Print</h2>";
    print $myString;
    //print a text string that interpret variables
    echo "<h2>interpret variables</h2>";
    var_dump($myString);
    //Concatenate a previously declared variable in a text string
    echo "<h2>Concatenate</h2>";
    $myString .= ",how are you?";
    echo $myString;
    //Execute the function that allows you to replace text in a string (case sensitive)
    echo "<h2>replace</h2>";
    $myString = str_replace("Hi","Goodbye",$myString);
    echo $myString;
    
    //Execute the function that allows you to replace text in a string 
    echo "<h2>replace no sensitive</h2>";
    $myString = str_ireplace("goodbye world","hellouda",$myString);
    echo $myString;
//Execute the function that allows you to write a text N times

    echo "<h2>write text n times</h2>";
    echo str_repeat($myString,3);
//Execute the function that allows to obtain the length of a text string
    echo "<h2>Obtain length of a text string</h2>";
    echo strlen($myString)," characters";
//Executes the function that allows to obtain the position of the first occurrence of a text within a text string
    echo "<h2>obtain position of the first occurrence</h2>";
    echo "the letter h is in the position ",strpos($myString,"h");
//Execute the function that allows a text string to be capitalized
    echo "<h2>String capitalized</h2>";
    echo ucfirst($myString);
//Execute the function that allows you to transform a text string to lowercase
    echo "<h2>String to lowercase</h2>";
    echo "<p>before</p>";
    $str = "IM A STRING";
    echo $str;
    echo "<p>after</p>";
    echo strtolower($str);
//Execute the function that allows to obtain a text substring from a given position
    echo "<h2>Substrings</h2>";
    echo substr($str,0,5);
    ?>
</body>
</html>