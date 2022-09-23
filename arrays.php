<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays.php</title>
</head>
<body>
    <h2>Arrays</h2>

    <?php
    
    $instruments = array('trumpet', 'piano', 'saxophone');
    var_dump($instruments);
    echo ("<br/>");
    
    $numberArr = array(1, 3, 5);
    var_dump($numberArr);
    echo ("<br/>");

    $softDrinks = array (
        array("Coke"),
        array("Fanta"),
        array("Nestea"),
        array("7Up")
    );
    var_dump($softDrinks);
    echo ("<br/>");

    $fruits = array('apple', 'banana', 'mango');
    echo ("The lenght of array is ");
    echo count($fruits);
    echo ("<br/>");

    $combination = array_merge($instruments, $fruits);
    var_dump($combination);
    echo ("<br/>");

    $lastElement = array('milk', 'cocoa', 'hazelnut', 'sugar', 'Nocilla');
    var_dump($lastElement);
    echo end($lastElement);

    $pushArr = array('spaghetti', 'cream', 'bacon');
    array_push($pushArr, 'onion');
    var_dump($pushArr);

    ?>

</body>
</html>