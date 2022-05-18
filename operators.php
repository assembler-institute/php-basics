<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./src/css/main.css" rel="stylesheet" />
    <title>Operators</title>
</head>

<body class=body>
    
    <h2 class="header"> Arithmetic operators: </h2>
<fieldset class= fieldset> 
    <legend>Create an example of use for arithmetic operators: +, -, *, /, and%</legend>
    <div class="container" id="container"> 
        <li>
            <?php
            echo '10 + 5 =';
            $x = 10;
            $y = 5;
            echo $x + $y;
            ?>
        </li>
        <li>
            <?php
            echo '10 - 5 = ';
            $x = 10;
            $y = 5;
            echo $x - $y;
            ?>
        </li>
        <li>
            <?php
            echo '10 * 5 = ';
            $x = 10;
            $y = 5;
            echo $x * $y;
            ?>
        </li>
        <li>
            <?php
            echo '10 / 5 = ';
            $x = 10;  
            $y = 5;
            echo $x / $y;
            ?>
        </li>
        <li>
            <?php
            echo '10 % 5 = ';
            $x = 10;  
            $y = 5;
            echo $x % $y;
            ?>
        </li>
    </div>
    </fieldset>

<h2 class="header"> Comparison operators: </h2>
<fieldset class= fieldset> 
    <legend>Create a usage example for comparison operators: ==,! =, <,>, <=,> =</legend>
    <div class="container" id="container"> 
    <li>
        <?php
        echo 'It is 10 == 10? ';
        $x = 10;
        $y = 10;
        var_dump($x == $y); 
        ?>
    </li>
    <li>
        <?php
        echo 'It is 10 != 10? ';
        $x = 10;
        $y = 10;
        var_dump($x != $y); 
        ?>
    </li>
    <li>
        <?php
        echo 'It is 10 = 9? ';
        $x = 10;
        $y = 9;
        var_dump($x == $y); 
        ?>
    </li>
    <li>
        <?php
        echo 'It is 10 > 20? ';
        $x = 10;
        $y = 20;
        var_dump($x > $y); 
        ?>
    </li>
    <li>
        <?php
        echo 'It is 10 < 20? ';
        $x = 10;
        $y = 20;
        var_dump($x < $y); 
        ?>
    </li>
    <li>
        <?php
        echo 'It is 20 <= 20? ';
        $x = 20;
        $y = 20;
        var_dump($x <= $y); 
        ?>
    </li>
    </div>
    </fieldset>

<h2 class="header"> Logical operators: </h2>
<fieldset class= fieldset> 
    <legend>Create an example of use for logical operators: &&, And; ||, Or; ! (NOT); Xor</legend>
    <div class="container" id="container"> 
    <li>
        <?php
        echo 'It is 100 = 100 <strong>AND</strong> 50 = 50? ';
        $x = 100;  
        $y = 50;
        
        if ($x == 100 and $y == 50) {
            echo "<mark>True</mark>";
        }
        ?>
    </li>
    <li>
        <?php
        echo 'It is 100 = 100 <strong>&&</strong> 50 = 50? ';
        $x = 100;  
        $y = 50;
        
        if ($x == 100 && $y == 50) {
            echo "<mark>True</mark>";
        }
        ?>
    </li>
    <li>
        <?php
        echo 'It is 100 = 100 <strong>OR || </strong> 50 = 50? ';
        $x = 100;  
        $y = 50;
        
        if ($x == 100 || $y == 80) {
            echo "<mark>True</mark>";
        }
        ?>
    </li>
    <li>
        <?php
        echo '100 = 100 <strong>XOR</strong> 50 = 50? ';
        $x = 100;  
        $y = 50;
        
        if ($x == 100 xor $y == 80) {
            echo "<mark>True</mark>";
        }
        ?>
    </li>
    
    </div>
    </fieldset>

</body>

</html>