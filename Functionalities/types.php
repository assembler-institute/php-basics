<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Types</title>
</head>
<body>
    <!-- 
        Define a new variable and assign a value to each of the following types:
        boolean
        integer
        float
        string
        array
        object
        NULL
     -->
    <?php
    $foo = True; //boolean
    var_dump ($foo);
    echo '<br>';
    echo '<br>';
    $a = 1234; //integer
    var_dump ($a);
    echo '<br><br>';
    $b = 1.234; //float
    var_dump ($b);
    echo '<br><br>';
    $str = 'this is a simple string'; //string
    var_dump ($str);
    echo '<br><br>';
    $array = array(
        1    => "a",
        "1"  => "b",
        1.5  => "c",
        true => "d",
    );
    var_dump($array);
    echo '<br><br>';
    //↓↓Objects
    $obj = new stdClass();
    $obj -> name = "Nick";
    $obj -> surname = "Doe";
    var_dump($obj);
    echo '<br><br>';
    $object = (object) [
        'propertyOne' => 'foo',
        'propertyTwo' => 42,
      ];
    var_dump($object);
    //--------
    $ab = NULL;     
    var_dump ($ab);
    ?>
</body>
</html>