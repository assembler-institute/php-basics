<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print PHP</title>
</head>

<body>
    <div>
        <h2>Generate an instruction that makes use of "echo"</h2>
        <p><?php
            echo "Instruction using echo";
            ?></p>
    </div>
    <div>
        <h2>Generate an instruction that makes use of "print"</h2>
        <p><?php
            print "Instruction using print";

            ?></p>
    </div>
    <div>
        <h2>Generate an instruction that makes use of "print_r", it is important that you assign a complex value to analyze its potential</h2>
        <p><?php
            $a = array('a' => 'Using print_r', 'b' => array('x', 'y', 'z'));
            print_r($a);
            ?></p>
    </div>



</body>

</html>