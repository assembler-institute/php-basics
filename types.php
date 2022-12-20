<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Types</title>
</head>
<body>
    <h1>Types.php</h1>
    <?php
        echo '<p><b>$boolean = [true, false]</b></p>';
        $boolean = [true, false];
        var_dump($boolean);
        echo '<hr>';

        echo '<p><b>$integer = 1</b></p>';
        $integer = 1;
        var_dump($integer);
        echo '<hr>';

        echo '<p><b>$float = 1.5</b></p>';
        $float = 1.5;
        var_dump($float);
        echo '<hr>';

        echo '<p><b>$string = "Jose"</b></p>';
        $string = 'Jose';
        var_dump($string);
        echo '<hr>';

        echo '<p><b>$array = array("Jose", 1, 1.5)</b></p>';
        $array = array('Jose', 1, 1.5);
        echo '<pre>';
        var_dump($array);
        echo '</pre><hr>';

        echo '<p><b>$object = (object)["fruta" => "pera","manzana", "verdura" => "zanahoria","calabaza"]</b></p>';
        $object = (object)["fruta" => "pera","manzana", "verdura" => "zanahoria","calabaza"];
        echo '<pre>';
        var_dump($object);
        echo '</pre>';

        echo '<p><b>$null = NULL</b></p>';
        $null = NULL;
        var_dump($null);
    ?>
</body>
</html>