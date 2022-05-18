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
    $num = 5;
//ABSOLUTE VALUE
    echo "<h2> ABSOLUTE VALUE of -5</h2>";
        $numAbsolute = abs(-$num);
        echo "<p>$numAbsolute</p>";
//ROUNDED VALUE
    echo "<h2> Rounded Value of 5.5</h2>";
        $numRounded = round($num+0.5);
        echo "<p>$numRounded</p>";
//HIGHEST VALUE
    echo "<h2> HIGHEST VALUE of 5,4,1,3</h2>";
        $numHigh = max($num,4,1,3);
        echo "<p>$numHigh</p>";
//LOWEST VALUE
    echo "<h2> LOWEST VALUE of 5,4,1,3</h2>";
        $numLow = min($num,4,1,3);
        echo "<p>$numLow</p>";
//RANDOM NUMBER
    echo "<h2> RANDOM NUMBER between 5 and 10</h2>";   
        $numRandom = rand($num,10);
        echo "<p>$numRandom</p>";
    ?>
</body>
</html>