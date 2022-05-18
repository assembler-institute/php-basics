<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./src/css/main.css" rel="stylesheet" />
    <title>Dates</title>
</head>

<body class=body>

    <h2 class="header"> DateTime class: </h2>
    <fieldset class= fieldset> 
        <legend>Get: the current date in any format, the current month in numerical format (1-12) and the current minute with leading zeros (00 - 59)  </legend>
        <div class="container" id="container"> 
        <?php
            echo "<li>Today is " . date("Y/m/d") . "</li><br>";
            echo "<li>Today is " . date("l") . "</li><br>";
            echo "<li>Month number is " . date("m") . "</li><br>";
            echo "<li>The current minute is " . date("i</li>");
        ?>
        </div>
    </fieldset>

</body>

</html>