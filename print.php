<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print.php</title>
</head>
<body>
    <h2>Print</h2>

    <!-- 
        - Generate an instruction that makes use of "echo"
        - Generate an instruction that makes use of "print"
        - Generate an instruction that makes use of "print_r", it is important that you assign a complex value to analyze its potential
    -->

    <?php

    echo "echo: This language needs more color.<br/>";

    echo "<br/>";

    print "print: Used to display a string.<br/>";

    echo "<br/>";

    echo "Print_r: ";
    $dogs = array('dog1' => 'Collie', 'Poodle' => array ('White', 'Black'));
    print_r ($dogs);



    ?>

</body>
</html>