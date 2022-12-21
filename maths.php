<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Maths</title>
</head>
<body>
    <h1>Maths.php</h1>
    <?php
        echo '<b>$num1 = 95.52 </b><br>';
        $num1 = 95.52;
        echo 'Absolute value: ' . abs($num1) . '<br>';
        echo 'Rounded down value: ' . floor($num1) . '<br>';
        echo 'Rounded up value: ' . round($num1) . '<br><br>';

        echo '<b>$numbers = array (0.8, 9.5, 1, 25);</b><br>';
        $numbers = array(0.8, 9.5, 1, 25);
        echo 'Highest value: ' . max($numbers) . '<br>';
        echo 'Lowest value: ' . min($numbers) . '<br><br>';
        
        echo '<b>Random number from 0 to 40</b><br>';
        echo 'Random value: ' . rand(0, 40) . '<br>';

    ?>
</body>
</html>