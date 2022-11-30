<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Types PHP</title>
</head>

<body>
    <div>
        <h2>Define a new variable and assign a value to each of the following types:</h2>
        <h3>Boolean</h3>
        <p>
            <?php
            $x = true;
            var_dump($x);
            ?>
        </p>

        <h3>Integer</h3>
        <p>
            <?php
            $x = 1989;
            var_dump($x);
            ?>
        </p>

        <h3>Float</h3>
        <p>
            <?php
            $x = 6.58;
            var_dump($x);
            ?>
        </p>

        <h3>String</h3>
        <p>
            <?php
            $x = "I´m a string!";
            var_dump($x);
            ?>
        </p>

        <h3>Array</h3>
        <p>
            <?php
            $cars = array("Volvo", "BMW", "Toyota");
            var_dump($cars);
            ?>
        </p>

        <h3>Object</h3>
        <p>
            <?php
            class Car
            {
                public $color;
                public $model;
                public function __construct($color, $model)
                {
                    $this->color = $color;
                    $this->model = $model;
                }
                public function message()
                {
                    return "My car is a " . $this->color . " " . $this->model . "!";
                }
            }
            $myCar = new Car("black", "Volvo");
            var_dump($myCar);
            ?>
        </p>

        <h3>NULL</h3>
        <p>
            <?php
            $x = "Hello world!";
            $x = null;
            var_dump($x);
            ?>
        </p>

    </div>

</body>

</html>