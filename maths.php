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

    <h2 class="header"> Mathematical operators and the specific PHP functions: </h2>
    <fieldset class= fieldset> 
        <legend>Define a variable whose value is the result of the function that returns an absolute value.:
        </legend>
        <div class="container" id="container">
        <?php
        echo "<li>Absolute value -4.2</li>"; 
        echo abs(-4.2); // 4.2 (double/float)
        ?>
        
        </div>
    </fieldset>
    <br>
    <fieldset class= fieldset> 
        <legend>Define a variable whose value is the result of the function that returns a rounded value to the next highest integer:
        </legend>
        <div class="container" id="container">
          
        <?php
        echo "<li>Round 0.70</li>"; 
        echo ceil(0.70);
        ?>

        </div>
    </fieldset>
    <br>
    <fieldset class= fieldset> 
        <legend>Define a variable whose value is the result of the function that returns the highest value of a series of values ​​that are received by parameter:
        </legend>
        <div class="container" id="container">
        <?php
        echo "<li>Return highest number of (44,16,81,12)</li>"; 
        echo(max(array(44,16,81,12)));
        ?>
        </div>
    </fieldset>

    <fieldset class= fieldset> 
        <legend>Define a variable whose value is the result of the function that returns the lowest value of a series of values ​​that are received by parameter:
        </legend>
        <div class="container" id="container">
        <?php
        echo "<li>Return lowest number of (44,16,81,12)</li>"; 
        echo(min(array(44,16,81,12)));
        ?>
        </div>
    </fieldset>
    <br>
    <fieldset class= fieldset> 
        <legend>Define a variable whose value is the result of the function that returns a random number:
        </legend>
        <div class="container" id="container">
        <?php
        echo "<li>Return a random number between 1 and 100 (inclusive)</li>"; 
        echo(mt_rand(1,100));
        ?>
        </div>
    </fieldset>
    
</body>

</html>