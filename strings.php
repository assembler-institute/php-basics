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
        echo "Hello"
        ?>
    </div>
    <div>
        <?php
        $whatsup = "How are you?";
        echo "$whatsup";
        ?>
    </div>
    <div>
        <?php
        echo "Hello $whatsup";
        ?>
    </div>
    <div>
        <?php
        $hello = "Hello";
        echo str_ireplace("h", "*", $hello);
        ?>
    </div>
    <div>
        <?php
        echo str_replace("h", "*", $hello);
        ?>
    </div>
    <div>
        <?php
        $hello5 = "Hello5times";
        echo str_repeat($hello5 . "\n", 5);
        ?>
    </div>
    <div>
        <?php
        $length = "length";
        echo strlen($length);
        ?>
    </div>
    <div>
        <?php
        $str = "find the position in this string";
        echo strpos($str, "string");
        ?>
    </div>
    <div>
        <?php
        echo ucfirst($str);
        ?>
    </div>
    <div>
        <?php
        echo strtolower($str);
        ?>
    </div>
    <div>
        <?php
        $find = substr($str, 0, 4);
        echo $find;
        ?>
    </div>
</body>

</html>