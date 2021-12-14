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
    echo "<h1> Iterators</h1>";
//using for

    echo "<h2> For</h2>";
    $numbers=array("1","2","3");

    for ($i=0; $i < 3; $i++) {
        echo "$numbers[$i],";
    }
    echo "<br>";
//using forEach
    echo "<h2> ForEach</h2>";
    $fruits=array("apple","banana","orange");
    forEach($fruits as $value){
        echo "$value,";
    }
    
//using while
    echo "<h2> While</h2>";
    while($i<6){
        echo "<p>Im the number $i,</p>";
        $i++;
    }
//do while 
    echo "<h1> do while</h1>"; 
    $x=0;
    do{
        echo "Im looping with the do while method for the $x time,";
        $x++;
    }while($x<4)
    ?>
</body>
</html>