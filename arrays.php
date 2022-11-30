<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $name = array("Manolo", "Juan", "Jose");
        print $name[0] . " " . $name[1] . " " . $name[2] . "<br/>";
        $numbers = array("5", "55", "5,5");
        print $numbers[0] . " " . $numbers[1] . " " . $numbers[2] . "<br/>";

        $cars = array (
            array("Volvo",12,150),
            array("BMW",30,250),
            array("Saab",0,40),
            array("Land Rover",6,70)
        );
        print $cars[0][0].": models in stock: ".$cars[0][1].", all models: ".$cars[0][2].".<br>";
        print $cars[1][0].": models in stock: ".$cars[1][1].", all models: ".$cars[1][2].".<br>";
        print $cars[2][0].": models in stock: ".$cars[2][1].", all models: ".$cars[2][2].".<br>";
        print $cars[3][0].": models in stock: ".$cars[3][1].", all models: ".$cars[3][2].".<br>";

        print count($name);

        $a = array("Juan","Manolo","Eusebio");
        $b = array("volvo", "mercedes", "seat");

        $c = array_combine($a, $b);
        print_r ($c);
        print  ("<br/>");

        print end($name);
        print  ("<br/>");

        $city = array("madrid", "barcelona");
        $city2 = array_push($city, "sevilla", "bilbao");
        print_r($city2);
    ?>
</body>
</html>