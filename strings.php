<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strings</title>
</head>
<body>
    <h1>Strings.php</h1>
    <?php
     include "arrays.php";

     echo '<b> Print a text string: </b>"I am a text string"<br><br>';

     $phrase = 'Today is a good day';
     echo '<b>Print phrase with variables: </b>' . $phrase . '<br><br>';

     $name = 'Jose';
     $surname = 'Torres';
     echo '<b>Print sentence with concatenated variables: </b>My name is: <b>' . $name . '</b> my surname is: <b>'. $surname .'</b><br><br>';

     echo '<b>Replace text</b><br>';
     echo 'Hello world! Today is a great day <br>';
     echo str_replace('world', 'Jose', 'Hello world!') . '<br><br>';

     echo '<b>Repeat text 10 times:</b><br>';
     echo str_repeat('Hi!<br>', 10);

     echo '<br><b>Know the number of characters that the string of the variable has: $phrase = "Today is a good day";</b><br>';
     echo strlen($phrase);

     echo '<br><br><b>Position of a word: $phrase = "Today is a good day";</b><br>';
     echo strpos($phrase, 'good');

     echo '<br><br><b>Convert text string to uppercase: $phrase = "Today is a good day";</b><br>';
     echo strtoupper($phrase);

     echo '<br><br><b>Convert text string to lowercase: $phrase = "Today is a good day";</b><br>';
     echo strtolower($phrase);

     echo '<br><br><b>Get substring of text from array.php file</b><br>';
    //  primer parametro posicion del array, segundo parametro posicion de la letra y tercer parametro cuantas letras queremos mostrar
     echo substr($string[1], 0, 4);


    ?>
</body>
</html>