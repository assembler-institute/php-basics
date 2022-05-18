<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./src/css/main.css" rel="stylesheet" />
    <title>Conditionals</title>
</head>

<body class=body>

    <h2 class="header"> Conditionals: </h2>
    <fieldset class= fieldset> 
        <legend>Create a simple condition that evaluates whether the current day is Monday. Only in the case that the condition is met, it shows a message of “We are on Monday”. </legend>
        <div class="container" id="container"> 
        <?php
            echo "<li>Today is " . date("l") . "</li><br>";

        ?>
        <?php
            $t = date("N");

            if ($t = "2") {
            echo "<li>We are NOT on Monday</li>";}
            else {
                echo "<li>We are on Monday</li>";
            }
        ?>
        </div>
    </fieldset>
    <br>
    <fieldset class= fieldset> 
        <legend>Create a simple condition that evaluates whether the current month is October. If the condition is met, it shows a message of the type "We are in October". Otherwise, if this condition is not met, show the current month in words as it come from DateTime. </legend>
        <div class="container" id="container"> 
        <?php
        echo "<li>Month number: " . date("m") . "</li><br>";
        $t = date("m");

        if ($t === "05") {
        echo "<li>We are on May</li>";}
        else {
        echo "<li>We are not on May</li>";
        }
        ?>
        </div>
    </fieldset>
    <br>
    <fieldset class= fieldset> 
        <legend>If the current minute is less than 10. Displays a message of type "the current minute is less than 10", if the current minute is greater than 15, displays a message of the type "the current minute is more than 15". If you do not meet any of the two conditions above: Displays a message of the type "does not meet any conditions” </legend>
        <div class="container" id="container"> 

        <?php
        echo "<li>Current minute is: " . date("H") . "</li><br>";
        $t = date("H");

        if ($t < "10") {
        echo "the current minute is less than 10</li>";
            } elseif ($t > "15") {
                echo "<li>the current minute is more than 15</li>";
            } else {
                echo "Have a good night!";
            }
            ?>
        </div>
    </fieldset>
    <br>
    <fieldset class= fieldset> 
        <legend>Create a switch type control </legend>
        <div class="container" id="container"> 
        <?php
            echo "<li>Today is " . date("N") . "</li><br>";

        ?>
        <?php
            $t = date("H");

            if ($t <= "2") {
            echo "<li>We are starting the week</li>";
            } elseif ($t = "3") {
            echo "<li>We are in the middle of the week</li>";
            } else {
            echo "<li>We are ending the week</li>";
            }
        ?>
        </div>
    </fieldset>
</body>

</html>