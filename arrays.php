<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Arrays</title>
</head>
<body>
    <?php
    $arrayStrings = array("Monday","Tuesday","Wednesday");
    $arrayNumbers = array(4,5,6,7,8);
    $arrayMultidimensional = array(
        array("Samsung",20),
        array("Apple",14),
        array("Xiaomi",13),
        array("Others",53)
    );
    echo "<p>String array: ",print_r($arrayStrings),"</p>";
    echo "<p>Number array: ",print_r($arrayNumbers),"</p>";
    echo "<p>Multidimensional array: ",print_r($arrayMultidimensional),"</p>";
    echo "<p>Length of an array: ",count($arrayStrings),"</p>";
    echo "<p>Combination of two arrays: ",print_r(array_merge($arrayStrings,$arrayNumbers)),"</p>";
    echo "<p>Last element of array: ",end($arrayStrings),"</p>";
    array_push($arrayStrings, "Thursday");
    echo "<p>Add an element to array: ",print_r($arrayStrings),"</p>";
    ?>
</body>
</html>