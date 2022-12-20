<?php
    echo "<h1>Strings</h1>";

    echo "<p>Hello Assembler</p>";

    $name = "David";

    echo $name;

    echo "<p>My name is $name.</p>";

    # replace text in a string
    $phrase = "<p>University is great to study in it.</p>";

    echo str_replace("University", "Assembler", $phrase);

    $other_phrase = "<p>I like play Football</p>";

    echo str_ireplace("football", "video games", $other_phrase);

    #function that allows you to write a text N times
    $txt = "PHP ";

    echo str_repeat($txt, 5);

    #length of a string
    echo "<p>Length of $name: ", strlen($name), "</p>";

    #obtain the position of the first occurrence of a text within a text string
    echo "<p>Position of v in $name: ", strpos($name, "v"),"</p>";

    #converts a string to uppercase
    echo "<p>My name converted to uppercase: ", strtoupper($name),"</p>";

    #converts a string to lowercase
    echo "<p>My name converted to lowercase: ", strtolower($name),"</p>";

    #obtain a text substring from a given position
    echo "<p>A substring text of $name from a given position(2): ", substr($name, 2),"</p>"
?>