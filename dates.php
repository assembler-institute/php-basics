<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File dates.php</title>
</head>

<body>
    <h1>library of functionalities php</h1>
    <h2>php DateTime class</h2>

    <?php
    $objDateTime = new DateTime('NOW');


    echo $objDateTime->format('Y-m-d');
    echo "<br>";

    echo $objDateTime->format(DateTimeInterface::COOKIE);
    echo "<br>";

    echo "Today is " . date("l");
    echo "<br>";

    echo "Current month in numerical format " . date("m");
    echo "<br>";

    echo "Current minute with leading zeros " . date("i");
    echo "<br>";

    ?>

</body>

</html>