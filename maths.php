<!-- This file as its name properly indicates will be used for working with mathematical operators and the specific PHP functions for:
Define a variable whose value is the result of the function that returns an absolute value.
Define a variable whose value is the result of the function that returns a rounded value to the next highest integer.
Define a variable whose value is the result of the function that returns the highest value of a series of values ​​that are received by parameter.
Define a variable whose value is the result of the function that returns the lowest value of a series of values ​​that are received by parameter.
Define a variable whose value is the result of the function that returns a random number -->

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
$absolute = abs(-6.4);
    echo " absolute ". $absolute;
$round = round(3.256);
    echo " rounded ". $round;
$highest = max(5, 20, 3, 2);
    echo " highest ".$highest;
$lowest = min(2, 3, 1, 5, 2);
    echo " lowest ".$lowest;
$random = rand();
    echo " random number ". $random;
    ?>
</body>
</html>