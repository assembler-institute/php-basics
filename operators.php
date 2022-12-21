<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Operators</title>
</head>
<body>
    <h1>Operators.php</h1>
    <?php
        $num1 = 12;
        $num2 = 4;

        echo '<p><b>operator + </b></p>';
        echo '$num1 = 12 <br> $num2 = 4 <br>';
        $sum = $num1 + $num2;
        echo $sum . '<br>';
        echo '<code>var_dump($num1 + $num2)</code><br>';
        var_dump($sum);
        echo '<hr>';

        echo '<p><b>operator - </b></p>';
        echo '$num1 = 12 <br> $num2 = 4 <br>';
        $rest = $num1 - $num2;
        echo $rest . '<br>';
        echo '<code>var_dump($num1 - $num2)</code><br>';
        var_dump($rest);
        echo '<hr>';

        echo '<p><b>operator / </b></p>';
        echo '$num1 = 12 <br> $num2 = 4 <br>';
        $div = $num1 / $num2;
        echo $div . '<br>';
        echo '<code>var_dump($num1 / $num2)</code><br>';
        var_dump($div);
        echo '<hr>';

        echo '<p><b>operator * </b></p>';
        echo '$num1 = 12 <br> $num2 = 4 <br>';
        $mult = $num1 * $num2;
        echo $mult . '<br>';
        echo '<code>var_dump($num1 * $num2)</code><br>';
        var_dump($mult);
        echo '<hr>';

        echo '<p><b>operator % </b></p>';
        echo '$num1 = 12 <br> $num2 = 4 <br>';
        $res = $num1 % $num2;
        echo $res . '<br>';
        echo '<code>var_dump($num1 % $num2)</code><br>';
        var_dump($res);
        echo '<hr>';

        echo '<p><b>operator == </b></p>';
        echo '$num1 = 12 <br> $num2 = 4 <br>';
        echo '<code>var_dump($num1 == $num2)</code><br>';
        var_dump($num1 == $num2);
        echo '<hr>';

        echo '<p><b>operator != </b></p>';
        echo '$num1 = 12 <br> $num2 = 4 <br>';
        echo '<code>var_dump($num1 != $num2)</code><br>';
        var_dump($num1 != $num2);
        echo '<hr>';

        echo '<p><b>operator < </b></p>';
        echo '$num1 = 12 <br> $num2 = 4 <br>';
        echo '<code>var_dump($num1 < $num2)</code><br>';
        var_dump($num1 < $num2);
        echo '<hr>';

        echo '<p><b>operator > </b></p>';
        echo '$num1 = 12 <br> $num2 = 4 <br>';
        echo '<code>var_dump($num1 > $num2)</code><br>';
        var_dump($num1 > $num2);
        echo '<hr>';

        echo '<p><b>operator <= </b></p>';
        echo '$num1 = 12 <br> $num2 = 4 <br>';
        echo '<code>var_dump($num1 <= $num2)</code><br>';
        var_dump($num1 <= $num2);
        echo '<hr>';

        echo '<p><b>operator >= </b></p>';
        echo '$num1 = 12 <br> $num2 = 4 <br>';
        echo '<code>var_dump($num1 >= $num2)</code><br>';
        var_dump($num1 >= $num2);
        echo '<hr>';

        echo '<p><b>operator && </b></p>';
        echo '$num1 = 12 <br> $num2 = 4 <br>';
        echo '<code>var_dump($num1 < 20 && $num2 > 1)</code><br>';
        var_dump($num1 < 20 && $num2 > 1);
        echo '<hr>';

        echo '<p><b>operator || </b></p>';
        echo '$num1 = 12 <br> $num2 = 4 <br>';
        echo '<code>var_dump($num1 < 20 || $num2 > 1)</code><br>';
        var_dump($num1 < 20 || $num2 > 1);
        echo '<hr>';

        echo '<p><b>operator Xor </b></p>';
        echo '$num1 = 12 <br> $num2 = 4 <br>';
        echo '<code>var_dump($num1 ^ $num2)</code><br>';
        var_dump($num1 ^ $num2);
        
    ?>
</body>
</html>