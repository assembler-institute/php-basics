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

    <h2 class="header"> Types of variables and data: </h2>
    <fieldset class= fieldset> 
        <legend>Define a new variable and assign a value to each of the following types:
 </legend>
        <div class="container" id="container">
        <li>  
        <?php
            $variable=true;
            print gettype($variable);
            ?>
            </li>
         <li> 
             <?php
            $variable= 10;
            print gettype($variable);
            ?>
        </li>
        <li> 
             <?php
            $variable= 256.4;
            print gettype($variable);
            echo ' or float ';
            ?>
        </li>
        <li> 
             <?php
            $variable= "string";
            print gettype($variable);
            ?>
        </li>
        <li> 
             <?php
            $variable=  array("foo", "bar", "hello", "world");
            print gettype($variable);
            ?>
        </li>
        <li> 
             <?php
            $variable=  (object) array('1' => 'foo');
            print gettype($variable);
            ?>
        </li>
        <li> 
             <?php
            $variable= NULL;   
            print gettype($variable);
            ?>
        </li>

        </div>
    </fieldset>
    <br>
    
</body>

</html>