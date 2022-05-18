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
//arithmetic
echo "<h2>Arithmetic operators</h2>";
    //sum
    echo "<h4>1+3</h4>";
    var_dump(1+2);
    //subtract
    echo "<h4>2-1</h4>";
    var_dump(2-1);
    //multiply
    echo "<h4>2*3</h4>";
    var_dump(2*3);
    //divide
    echo "<h4>4/2</h4>";
    var_dump(4/2);
    //module
    echo "<h4>4%2</h4>";
    var_dump(4%2);
//comparison
echo "<h2>Comparison operators</h2>";
    //equal
    echo "<h4>2==2</h4>";
    var_dump(2==2);
    //not equal
    echo "<h4>2!=2</h4>";
    var_dump(2!=2);
    //lower than
    echo "<h4>2<3</h4>";
    var_dump(2<3);
    //higher than
    echo "<h4>2>3</h4>";
    var_dump(2>3);
    //lower or equal than
    echo "<h4>2<=3</h4>";
    var_dump(2<=3);
     //higher or equal than
     echo "<h4>2>=3</h4>";
     var_dump(2>=3);
//logical operators
echo "<h2>Logical operators</h2>";
    //and
    echo "<h4>2==2 && 1==3</h4>";
    var_dump(2==2 && 1==3);
    //for
    echo "<h4>2==2 || 1==3</h4>";
    var_dump(2==2 || 1==3);
    //NOT
    echo "<h4>!2==3</h4>";
    var_dump(!2==3);
    //Xor
    echo "<h4>!2==3</h4>";
    var_dump(2==3 xor 3==3);


    ?>
</body>
</html>