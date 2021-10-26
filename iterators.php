<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <?php
        echo "for";
        for ($i = 1; $i <= 5; $i++) {
            echo "<div>Counter: $i</div>";;
        }
        ?>
    </div>
    <div>
        <?php
        echo "foreach";
        $numArr = [1, 2, 3, 4, 5];
        foreach ($numArr as $num) {
            echo "<div>Counter: $num</div>";
        }
        ?>
    </div>
    <div>
        <?php
        echo "while";
        $i = 1;
        while ($i <= 5) {
            echo '<div>Counter: ' . $i++ . '</div>';
        }
        ?>
    </div>
    <div>
        <?php
        echo "do-while";
        $i = 1;
        do {
            echo '<div>Counter: ' . $i++ . '</div>';
        } while ($i <= 5);
        ?>
    </div>

</body>

</html>