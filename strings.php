<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Strings</title>
</head>

<body>
    <h1>Strings</h1>
    <?php

    // Print a text string
    echo "<h2>Simple string</h2>";
    echo '<pre>echo "I\'m a string";</pre>';
    echo "<strong>Result: </strong>";
    echo "I'm a string";

    // Print a text string that interpret variables
    echo "<h2>String in a variable</h2>";
    echo '<pre>
    $str = "I\'m inside a variable!";
    echo $str;
    </pre>';
    echo "<strong>Result: </strong>";
    $str = "I'm inside a variable!";
    echo $str;

    // Concatenate a previously declared variable in a text string
    echo "<h2>Concatenate variables and strings</h2>";
    echo '<pre>
    $concatenated = " a simple string...";
    echo "I\'m not" . $concatenated;
    </pre>';
    echo "<strong>Result: </strong>";
    $concatenated = " a simple string...";
    echo "I'm not" . $concatenated;

    // Execute the function that allows you to replace text in a string (case sensitive)
    echo "<h2>Case sensitive replace</h2>";
    echo '<pre>
    $replace = "cats";
    str_replace("humans", $replace, "I\'m around humans all day long and I love humans, but not Humans")
    </pre>';
    echo "<strong>Result: </strong>";
    $replace = "cats";
    echo str_replace('humans', $replace, "I'm around humans all day long and I love humans, but not Humans");

    // Execute the function that allows you to replace text in a string (without taking into account upper / lower case)
    echo "<h2>No case sensitive replace</h2>";
    echo '<pre>
    $needle = "eating chocolate";
    $hay = "I love to code, Code is my passion.";
    str_ireplace($needle, "eat chocolate", $hay );
    </pre>';
    echo "<strong>Result: </strong>";
    $needle = "code";
    $hay = "I love to code, Code is my passion.";
    echo str_ireplace($needle, "eat chocolate", $hay);

    // Execute the function that allows you to write a text N times
    echo "<h2>Repeat a string</h2>";
    echo '<pre>str_repeat("I don\'t like to repeat myself.", 5);</pre>';
    echo "<strong>Result: </strong>";
    echo str_repeat("I don't like to repeat myself.<br/>", 5);

    // Execute the function that allows to obtain the length of a text string
    echo "<h2>Length of a string</h2>";
    echo '<pre>strlen("Supercalifragilisticexpialidocious");</pre>';
    echo "<strong>Result: </strong>";
    echo strlen("Supercalifragilisticexpialidocious");

    // Executes the function that allows to obtain the position
    // of the first occurrence of a text within a text string
    echo "<h2>Position of the first occurrence</h2>";
    echo '<pre>
    $haystack = "How much wood would a woodchuck chuck if a woodchuck could chuck wood.";
    strpos($haystack, "wood");
    </pre>';
    echo "<strong>Result: </strong>";
    $haystack = "How much wood would a woodchuck chuck if a woodchuck could chuck wood.";
    echo strpos($haystack, "wood");

    // Execute the function that allows a text string to be capitalized
    echo "<h2>Capitalize a string</h2>";
    echo '<pre>strtoupper("I\'m not screaming!");</pre>';
    echo "<strong>Result: </strong>";
    echo strtoupper("I'm not screaming!");

    // Execute the function that allows you to transform a text string to lowercase
    echo "<h2>Downcase a string</h2>";
    echo '<pre>strtolower("I CAN\'T SPEAK LOUDER...");</pre>';
    echo "<strong>Result: </strong>";
    echo strtolower("I CAN'T SPEAK LOUDER...");

    // Execute the function that allows to obtain a text substring from the position
    echo "<h2>Substract part of a string</h2>";
    echo '<pre>
    $ref = "Did you eat all chocolate yesterday?";
    substr($ref, 26, 3);
    </pre>';
    echo "<strong>Result: </strong>";
    $ref = "Did you eat all chocolate yesterday?";
    echo substr($ref, 26, 3);


    ?>
</body>

</html>