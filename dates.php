<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>DateTime class formated (Y-m-d): <?php 
    $d =  new DateTime();
    echo $d->format("Y-m-d");
    ?></p>

    <p>Current date: <?php 
    $date = new DateTime("NOW");
    echo $date->format("Y-m-d")
    ?></p>

    <p>Current day: <?php 
    echo $date->format("d")
    ?></p>

    <p>Current month in numerical: <?php 
    echo $date->format("m")
    ?></p>

    <p>Current minute with leading zeros: <?php 
    echo $date->format("i")
    ?></p>
</body>
</html>