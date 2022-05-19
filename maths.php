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
        $abs = abs(-3);
        echo "Absolute of -3: $abs";
        ?>
    </div>
    <div>
        <?php
        $nextNum = ceil(1.3);
        echo "Rounded to next integer from 1.3: $nextNum";
        ?>
    </div>
    <div>
        <?php
        $arr = [2, 4, 6, 8];
        $max = max($arr);
        echo "Maximum number of the array [2, 4, 6, 8]: $max";
        ?>
    </div>
    <div>
        <?php
        $arr = [2, 4, 6, 8];
        $min = min($arr);
        echo "Minimum number of the array [2, 4, 6, 8]: $min";
        ?>
    </div>
    <div>
        <?php
        $rand = rand(1, 9);
        echo "Random integer between 1 and 9: $rand";
        ?>
    </div>
</body>

</html>