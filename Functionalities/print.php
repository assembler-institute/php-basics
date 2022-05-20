<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print PHP</title>
</head>
<body>
    <!-- 
        Generate an instruction that makes use of "echo"
        Generate an instruction that makes use of "print"
        Generate an instruction that makes use of "print_r", it is important that you assign a complex value to analyze its potential
     -->
    <?php
    echo "Hello";
    echo "<br>";
    print "World";
    echo "<br>";
    $arrayName = array("Peter" => "35", "Ben" => "37", "Joe" => array ('43', '180 cm'));;
    print_r ($arrayName);
    ?>

</body>
</html>