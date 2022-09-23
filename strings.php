<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>

<body>
    <div>
        <?php

        print "Hola PHP";
        $text = "Alejo";

        print "$text";

        print "<p>Hello " . $text . "</p>";


        //Execute the function that allows you to replace text in a string (case sensitive)
        $hobbie = "gym";
        $lazy = "dark souls";
        $change = "";

        $newHobbie = str_replace($hobbie, $lazy, $change);

        //Execute the function that allows you to replace text in a string (without taking into account upper / lower case)
        $hobbie = "gym";
        $lazy = "dark souls";
        $change = "";

        $newHobbie = str_ireplace($hobbie, $lazy, $change);

        //Execute the function that allows you to write a text N times
        print str_repeat("🃏", 10);

        //Execute the function that allows to obtain the length of a text string
        $name = 'Alejo';
        echo strlen($name);

        //Executes the function that allows to obtain the position of the first occurrence of a text within a text string
        $mystring = 'My name is Alejandro';
        $findme   = 'Alejandro';
        $pos = strpos($mystring, $findme);

        //Execute the function that allows a text string to be capitalized
        //Execute the function that allows you to transform a text string to lowercase
        $str = "I live in Canarias";
        $strLower = strtolower($str);
        $strUpper = strtoupper($str);

        //Execute the function that allows to obtain a text substring from a given position
        $rest = substr("Alejandro", 0, -1);  //return Alejandr


        ?>
    </div>
</body>

</html>