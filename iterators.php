<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Iterators</title>
</head>
<body>
    <ol><?php 
    $languages = array("PHP", "JavaSscript", "Java", "Python","Ruby");
    for ($i = 0; $i <= count($languages)-1; $i++) {
        echo "<li> $languages[$i]</li>";
    }
    ?></ol>

    <ul>
        <?php 
        $shoppingList = array("Bananas", "Chocolate", "Milk", "Bread", "Yogurt");
        foreach ($shoppingList as $value){
            echo "<li> $value </li>";
        }
        ?>
    </ul>
    <p>
        <?php 
        $i = 0;
        while ($i <= 9) {
            echo $i;
            $i++;
        }
        ?>
    </p>

    <p>
        <?php 
        $i = 0;
        do {
            echo $i;
        } while ($i > 0);
        ?>
    </p>
</body>
</html>