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
        //echo test
        echo "Hi, this is an echo test with echo";

        echo "<br>";
        //print test
        //The major differences to echo are that print only accepts a single argument and always returns 1.
        print "Hello world, this is a test with print";
        echo "<br>";
        //print_r test
        $array= ["test","with","print_r"];
        print_r($array);
        
        echo "<br>";
        //print_r set to true
        print_r("Im not displayed because my bool is set to true",true);


    ?>
</body>
</html>