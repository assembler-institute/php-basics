<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php echo "<div>ECHO</div>";
    print "<div>PRINT</div>";
    $print_r = "<div>print_r</div>";
    $bool = true;
    $result = print_r($print_r, $bool);
    print_r($result);
    ?>
</body>

</html>