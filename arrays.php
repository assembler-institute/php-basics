<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./src/css/main.css" rel="stylesheet" />
    <title>Arrays</title>
</head>

<body class=body>

    <h2 class="header"> Work with arrays:</h2>
    <fieldset class= fieldset> 
        <legend>Define a simple array composed of text strings:
        </legend>
        <div class="container" id="container">
        <?php
        $country=array("Cuba","Spain","USA");
        echo "I lived in " . $country[0] . ", " . $country[1] . " and " . $country[2] . ".";
        ?>
        
        </div>
    </fieldset>
    <br>
    <fieldset class= fieldset> 
        <legend>Define a simple array consisting of whole numbers and decimal numbers:
        </legend>
        <div class="container" id="container">
        <?php
        $numbers = array( 1, 2, 3, 4, 5);
        foreach( $numbers as $value ) {
            echo "Value is $value <br />";
        }
        ?>

        </div>
    </fieldset>
    <br>
    <fieldset class= fieldset> 
        <legend>Define a multidimensional array:
        </legend>
        <div class="container" id="container">
        <?php
        $cars = array (
            array("Volvo",22,18),
            array("BMW",15,13),
            array("Saab",5,2),
            array("Land Rover",17,15)
          );
            echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
            echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
            echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
            echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
        ?>

        </div>
    </fieldset>

    <fieldset class= fieldset> 
        <legend>Execute the function that allows to obtain the length of an array:
        </legend>
        <div class="container" id="container">
        <?php
        $days = array("Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat");
        
        // Printing array size
        echo count($days);
        echo "<br>";
        echo sizeof($days);
        ?>
        </div>
    </fieldset>
    <br>
    <fieldset class= fieldset> 
        <legend>Execute the function that allows to obtain the combination of two arrays:
        </legend>
        <div class="container" id="container">
        <?php
        $a = array('green', 'red', 'yellow');
        $b = array('avocado', 'apple', 'banana');
        $c = array_combine($a, $b);
        
        print_r($c);
        ?>
        </div>
    </fieldset>
    <br>
    <fieldset class= fieldset> 
        <legend>Execute the function that once is given an array return the last element of it:
        </legend>
        <div class="container" id="container">
        <?php
        $array = ['First', 'Middle', 'Last'];
        echo end($array);
        ?>
        </div>
    </fieldset>
    <br>
    <fieldset class= fieldset> 
        <legend>Execute the function that once is given an array add a new element to the array in question:
        </legend>
        <div class="container" id="container">
        <?php
        $netflix = ['Stranger Things', 'Black Mirror', 'Picky Blinders', 'Lupin'];

        $new = array_push($netflix, 'Clark');
        
        print_r($netflix);
        echo $new."\n";

        ?>
        </div>
    </fieldset>
    
    
</body>

</html>