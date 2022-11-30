<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div>
        <?php
        $boolean = True;
        echo $boolean;
        ?>
    </div>

    <div>
        <?php
        $integer = 5;
        echo $integer;
        ?>
    </div>
    <div>
        <?php
        $float = 505.050505;
        echo $float;
        ?>
    </div>
    <div>
        <?php
        $string = "HELLO";
        echo $string;
        ?>
    </div>
    <div>
        <?php
        $array = [1, 2, 3, 4, 5];
        print_r($array);
        ?>
    </div>
    <div>
        <?php
        $object = (object) ["firstName" => "Antonio", "lastName" => "Copete"];
        print_r($object);
        ?>
    </div>
    <div>
        <?php
        $null = null;
        var_dump($null);
        ?>
    </div>

</body>

</html>