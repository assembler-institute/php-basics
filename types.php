<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Types</title>
</head>
<body>
    <?php 
    $b = True;
    $i = 5;
    $f = 2.5;
    $s = "Hello";
    $a = array("apple","banana","watermelon");
    $o = new DateTime();
    $n = NULL;

    $types = array($b,$i,$f,$s,$a,$o,$n);
    ?>
    <table>
        <tr>
            <th>Type</th>
            <th>Value</th>
        </tr>
        <?php 
        foreach ($types as $value){
            echo "<tr><td>",gettype($value),"</td><td>",print_r($value),"</td></tr>";
        }
        ?>
    </table>
    
</body>
</html>