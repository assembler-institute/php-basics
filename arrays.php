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
        $strArr = array("first", "second", "third");
        print_r($strArr);
        ?>
    </div>
    <div>
        <?php
        $numArr = array(5, 2.234, 35.2);
        print_r($numArr);
        ?>
    </div>
    <div>
        <?php
        $multiArr = array(5, array(array(2.234), 35.2));
        print_r($multiArr);
        ?>
    </div>
    <div>
        <?php
        print_r(count($strArr));
        ?>
    </div>
    <div>
        <?php
        $arrKeys = array("first", "second", "third");
        $arrValues = array(1, 2, 3);
        print_r(array_combine($arrKeys, $arrValues));
        ?>
    </div>
    <div>
        <?php
        print_r(end($numArr));
        ?>
    </div>
    <div>
        <?php
        array_push($strArr, "last");
        print_r($strArr);
        ?>
    </div>

</body>

</html>