<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays PHP</title>
</head>

<body>
    <div>
        <h2>Define a simple array composed of text strings</h2>
        <p>
            <?php
            $cars = array("Volvo", "BMW", "Toyota");
            echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
            ?>

        </p>
    </div>

    <div>
        <h2>Define a simple array consisting of whole numbers and decimal numbers</h2>
        <p>
            <?php
            $cars = array(1, 5.5, 6);
            echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
            ?>

        </p>
    </div>

    <div>
        <h2>Define a multidimensional array</h2>
        <p>
            <?php
            $cars = array(
                array("Volvo", 22, 18),
                array("BMW", 15, 13),
                array("Saab", 5, 2),
                array("Land Rover", 17, 15)
            );
            echo $cars[0][0] . ": In stock: " . $cars[0][1] . ", sold: " . $cars[0][2] . ".<br>";
            ?>
        </p>
    </div>

    <div>
        <h2>Execute the function that allows to obtain the length of an array</h2>
        <p>
            <?php
            $cars = array("Volvo", "BMW", "Toyota");
            echo count($cars);
            ?>
        </p>
    </div>

    <div>
        <h2>Execute the function that allows to obtain the combination of two arrays</h2>
        <p>
            <?php
            $cars = array("Volvo", "BMW", "Toyota");
            $cars2 = array("Mercedes", "Seat", "Renault");
            $result = array_merge($cars, $cars2);
            echo var_dump($result);
            ?>
        </p>
    </div>

    <div>
        <h2>Execute the function that once is given an array return the last element of it</h2>
        <p>
            <?php
            $cars = array("Volvo", "BMW", "Toyota");
            echo end($cars);
            ?>
        </p>
    </div>

    <div>
        <h2>Execute the function that once is given an array add a new element to the array in question</h2>
        <p>
            <?php
            $cars = array("Volvo", "BMW", "Toyota");
            array_push($cars, "Mercedes");
            echo var_dump($cars);
            ?>
        </p>
    </div>

</body>

</html>