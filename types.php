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
    //BOOLEAN
    echo "<h2>Boolean</h2>";
    $winner = true;
    var_dump($winner);
    //INTEGER
    echo "<h2>number</h2>";
    $number = 10;
    var_dump($number);
    //FLOAT
    echo "<h2>float</h2>";
    $numfloat = 10.05;
    var_dump($numfloat);
    //STRING
    echo "<h2>String</h2>";
    $str = "Hi world";
    var_dump($str);
    //ARRAY
    echo "<h2>array</h2>";
    $arr = array(
        "Hi",
        "World"
    );
    var_dump($arr);
    //OBJECTS
    echo "<h2>Object</h2>";
    //First way
    class myObj
    {
        function something()
        {
            echo "Hi world again";
        }
    };
    $var = new myObj();
    var_dump($var);

    //second way
    echo "<p><b>Other way</b></p>";
    $obj = new stdClass();
    $obj->name = "Luis";
    var_dump($obj);
    //NULL
    echo "<h2>NULL</h2>";
    $players = null;
    var_dump($players);
    ?>
</body>

</html>