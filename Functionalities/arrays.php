<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <!-- 
    Define a simple array composed of text strings
    Define a simple array consisting of whole numbers and decimal numbers
    Define a multidimensional array
    Execute the function that allows to obtain the length of an array
    Execute the function that allows to obtain the combination of two arrays
    Execute the function that once is given an array return the last element of it
    Execute the function that once is given an array add a new element to the array in question
     -->
    <?php
    $simpleArray = array('Hyoyeon', 'Taeyeon', 'Tiffany');
    var_dump($simpleArray);
    echo '<br>';

    $simpleArray2 = array(11, 30, 30.15, 1.14159265);
    var_dump($simpleArray2);
    echo '<br>';
    
    $bts = array(
        array('RM'),
        array('Jin'),
        array('Taehyung'),
        array('Jimin'),
        array('Suga'),
        array('J-Hope'),
        array('Jungkook')
    );
    var_dump($bts);
    echo '<br>';

    echo count($simpleArray);
    echo '<br>';

    $comb = array_merge($simpleArray, $bts);
    var_dump($comb);
    echo '<br>';
    
    $pushArray = array('Rose Quartz, Amethyst', 'Tiger Eye');
    array_push($pushArray, 'Citrine');
    var_dump($pushArray);

    ?>
    
</body>
</html>