<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Dates</title>
</head>

<body>
    <h1>Dates</h1>
    <?php

    // Instance the Date Time class and then invoke the format method with the argument “Y-m-d” to show year-month-day
    echo "<h2>Instancing Date Time</h2>";
    echo '<pre>$dateOne = new DateTime();
    $firstDate = $dateOne -> format("Y-m-d");</pre>';

    $dateOne = new DateTime();
    $firstDate = $dateOne->format('Y-m-d');
    echo "<strong>Result: </strong>";
    echo $firstDate;

    // Get the current date in any format
    echo "<h2>Current date</h2>";
    echo '<pre>$dateTwo = new DateTime();
    $secondDate = $dateTwo -> format("D d M Y");</pre>';

    $dateTwo = new DateTime();
    $secondDate = $dateTwo->format('D d M Y');

    echo "<strong>Result: </strong>";
    echo $secondDate;

    // Get the current day
    echo "<h2>Current day</h2>";
    echo '<pre>$dateThree = new DateTime();
    $thirdDate = $dateThree -> format("l");</pre>';

    $dateThree = new DateTime();
    $thirdDate = $dateThree->format('l');
    echo "<strong>Result: </strong>";
    echo $thirdDate;

    // Get the current month in numerical format (1-12)
    echo "<h2>Current month</h2>";
    echo '<pre>$dateFour = new DateTime();
    $fourthDate = $dateFour -> format("m");</pre>';

    $dateFour = new DateTime();
    $fourthDate = $dateFour->format('m');

    echo "<strong>Result: </strong>";
    echo $fourthDate;

    // Get the current minute with leading zeros (00 - 59)
    echo "<h2>Current minute</h2>";
    echo '<pre>$dateFive = new DateTime();
    $fifthDate = $dateFive -> format("i");</pre>';
    $dateFive = new DateTime();
    $fifthDate = $dateFive->format('i');

    echo "<strong>Result: </strong>";
    echo $fifthDate;
    ?>

</body>

</html>