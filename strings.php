<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    print "Hello I'm a string"
    ?>
    <br>
    <?php
    $vari = "I'm a variable";
    print_r("hello, i'm an string that prints variables: '$vari'");
    ?>
    <br>
    <?php
    $vari = "I'm a variable";
    print "hello, i'm an string that concatenates variables:". $vari;
    ?>
    <br>
    <?php
    $var1 = "Hola soy la variable 1 ";
    echo $var1;
    echo str_replace('Hola', 'Adios', $var1);
    ?>
    <br>
    <?php
    
    for ($i = 0; $i<10; $i++){
        ?>
        <br>
        <?php
        echo "hello";
        };
        ?>
        <br>
        <?php
    $strlength = "Hey, im an string";
    echo strlen($strlength);
    ?>
    <br>
    <?php
    echo strtoupper($strlength);
    ?>
    <br>
    <?php
    $strcapi = "HEY, I'M AN STRING";
    echo strtolower($strcapi);
    ?>
    <br>
    <?php
    echo $rest = substr("abcdef", -1);
    ?>
    
</body>
</html>