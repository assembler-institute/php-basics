<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Types.php</title>
</head>
<body>
    <h2>Types</h2>

     <?php

    $boolVar = true;

    $intNumber = 33;

    $floatNumber = 73.38;

    $oneString = "Cool dog";

    $musicStyle = array("electronic", "rock", "classical" => "piano");

    $dog = new stdClass();
    $dog -> name = "Churrete";
    $dog -> breed = "Poodle";
    var_dump($dog);

    $nullVar = NULL;

     ?>

</body>
</html>