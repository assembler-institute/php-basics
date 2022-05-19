<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings.php</title>
</head>
<body>
    <h2>Strings</h2>


    <?php

    print ("I want a GTR <br/>");

    $food = "tacos";
    print ($food);
    echo "<br/>";

    $hangry = "Tomorrow I'll eat";
    print ($hangry . " sushi");
    echo "<br/>";

    $wrongText = "I want to travel to zul";
    echo str_replace("zul", "Seoul", $wrongText);
    echo "<br/>";

    $wrongText2 = "I want to travel to pais";
    echo str_replace("PAIS", "paris", $wrongText2);
    echo "<br/>";

    $repeatString = "Rick & Morty, ";
    echo str_repeat($repeatString, 3);
    echo "<br/>";

    $strLength = "chocolate";
    echo ("the word chocolate has ");
    echo strlen($strLength);
    echo (" letters");
    echo "<br/>";

    $firstOccurrence = "That’s one small step for a man, a giant leap for mankind.";
    echo strpos($firstOccurrence, "giant");
    echo "<br/>";

    $upperStr = "hello Uppercase";
    echo strtoupper($upperStr);
    echo "<br/>";
    
    $lowerStr = "BYE LOWERCASE";
    echo strtolower($lowerStr);
    echo "<br/>";

    $subsStr = "I am listening to music";
    echo substr($subsStr, 11);

    ?>

</body>
</html>