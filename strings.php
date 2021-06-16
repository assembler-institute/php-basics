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

    // Var declarations
    $basicStringVar = "I'm a basic string";
    $stringToReplaceVar = "Replace, me";
    $replaceStringVar = "I'm here to replace you";
    $noUpperLowerCaseStringVar = "I am not case sensitive";
    $stringToRepeatVar = "Repeat ";
    $firstOccurrenceStringVar = "Replace";
    $lowerCaseToCapCase = "hello";
    $upperCaseToLowerCase = "WORLD";

    // Header 
    echo "<H1> STRINGS</H1>";

    // Print a text string
    echo "<H3> - Print a text string</H3>";
    echo "Basic string use with echo <br>";
    
    // Print a text string that interpret variables
    echo "<H3> - Print a text string that interpret variables</H3>";
    echo "\$basicStringVar = $basicStringVar <br>";
    
    // Concatenate a previously declared variable in a text string
    echo "<H3> - Concatenate a previously declared variable in a text string</H3>";
    echo "\$basicStringVar and that is ok = $basicStringVar and that is ok <br>";
    
    // Execute the function that allows you to replace text in a string (case sensitive)
    echo "<H3> - Execute the function that allows you to replace text in a string (case sensitive)</H3>";
    echo "\$stringToReplaceVar before replacement <br>";
    echo "\$stringToReplaceVar = $stringToReplaceVar <br>
    \$replaceStringVar = $replaceStringVar <br>";
    $stringToReplaceVar = str_replace("me", $replaceStringVar, $stringToReplaceVar);
    echo "\$stringToReplaceVar after replacement <br>";
    echo "\$stringToReplaceVar = $stringToReplaceVar <br>";

    // Execute the function that allows you to replace text in a string (case sensitive)
    echo "<H3> - Execute the function that allows you to replace text in a string (without taking into account upper / lower case)</H3>";
    echo "\$stringToReplaceVar before replacement <br>";
    echo "\$stringToReplaceVar = $stringToReplaceVar <br>
    \$replaceStringVar = $replaceStringVar <br>";
    $stringToReplaceVar = str_ireplace("replace", $noUpperLowerCaseStringVar, $stringToReplaceVar);
    echo "\$stringToReplaceVar after replacement <br>";
    echo "\$stringToReplaceVar = $stringToReplaceVar <br>";
    
    // Execute the function that allows you to write a text N times
    echo "<H3> - Execute the function that allows you to write a text N times</H3>";
    echo "\$stringToRepeatVar = '$stringToRepeatVar' is gonna be repeated <br>";
    echo str_repeat($stringToRepeatVar, 4);
    
    // Execute the function that allows to obtain the length of a text string
    echo "<H3> - Execute the function that allows to obtain the length of a text string</H3>";
    echo "\$stringToRepeatVar length = "; echo strlen($stringToRepeatVar); echo "<br>";
    
    // Executes the function that allows to obtain the position of the first occurrence of a text within a text string
    echo "<H3> - Executes the function that allows to obtain the position of the first occurrence of a text within a text string</H3>";
    echo "\$firstOccurrenceStringVar = '$firstOccurrenceStringVar' appears at "; 
    echo strrpos($stringToReplaceVar, $firstOccurrenceStringVar); echo "<br>";
    
    // Execute the function that allows a text string to be capitalized
    echo "<H3> - Execute the function that allows a text string to be capitalized</H3>";
    echo "\$lowerCaseToCapCase = $lowerCaseToCapCase before caps <br>";
    echo "\$lowerCaseToCapCase = "; echo strtoupper($lowerCaseToCapCase); echo " after caps <br>";
    
    // Execute the function that allows a text string to be lowercase
    echo "<H3> - Execute the function that allows a text string to be lowercase</H3>";
    echo "\$upperCaseToLowerCase = $upperCaseToLowerCase before lowercase <br>";
    echo "\$upperCaseToLowerCase = "; echo strtolower($upperCaseToLowerCase); echo " after lowercase <br>";
    
    // Execute the function that allows to obtain a text substring from the position
    echo "<H3> - Execute the function that allows to obtain a text substring from the position</H3>";
    echo "\$basicStringVar = $basicStringVar <br>";
    echo " a substring from \$upperCaseToLowerCase could be '"; echo substr($basicStringVar,4); echo "'<br>";
    
    ?>
    <br><br>
    <a href="/index.php"> <button>Home</button></a>
</body>
</html>
