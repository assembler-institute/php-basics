<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./src/css/main.css" rel="stylesheet" />
    <title>Functions</title>
</head>

<body class=body>

    <h2 class="header"> Implementation of functions::</h2>
    <fieldset class= fieldset> 
        <legend>Create a function that given two numbers returns the sum of both:
        </legend>
        <div class="container" id="container">
        <?php
        echo "15 + 30";
        function sum() {
            $x=15;
            $y=30;
            $z=$x+$y;
            echo " = ",$z;  
        }
        sum(); // call the function
        ?>
        </div>
    </fieldset>
    <br>
    <fieldset class= fieldset> 
        <legend>Create a function that given two numbers returns the multiplication of both
:
        </legend>
        <div class="container" id="container">
        <?php
        echo "5 * 10";
        function mult() {
            $x=5;
            $y=10;
            $z=$x*$y;
            echo " = ",$z;  
        }
        mult(); // call the function
        ?>

        </div>
    </fieldset>
    <br>
    <fieldset class= fieldset> 
        <legend>Create a function that given two numbers returns the division of both:
        </legend>
        <div class="container" id="container">
        <?php
        echo "50 / 10";
        function div() {
            $x=50;
            $y=10;
            $z=$x/$y;
            echo " = ",$z; 
        }
        div(); // call the function
        ?>

        </div>
    </fieldset>

    <fieldset class= fieldset> 
        <legend>Create a function that, given two numbers and an operation (add, multiply or divide), returns the result of that operation:
        </legend>
        <div class="container" id="container">
        <?php
        echo "(50 * 10) / 5";
        function rest() {
            $x=50;
            $y=10;
            $z=$x*$y;
            $n= 5;
            $resultado=$z/$n;
            echo " = ",$resultado; 
        }
        rest(); // call the function
        ?>
        </div>
    </fieldset>
    
    
    
</body>

</html>