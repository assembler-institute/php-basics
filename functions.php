<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Functions</title>
</head>
<body>
    <h1>Functions.php</h1>

    <?php
        echo '<b>Function add</b> <br>';
        function add($num1, $num2){
            return $num1 + $num2;
        }
        echo add(20, 30) . '<br>';

        echo '<b>Function multiply</b> <br>';
        function multiply($num1, $num2){
            return $num1 * $num2;
        }
        echo multiply(20, 30) . '<br>';

        echo '<b>Function division</b> <br>';
        function division($num1, $num2){
            echo $num1 / $num2;
        }
        division(50, 30) . '<br><br>';

        echo '<br><br>';
        echo '<b>Function operation</b> <br>';
        function operation($num1, $operator, $num2){
            if($operator === '+'){
                echo 'Add: ' . $num1 + $num2 . '<br>';
            }else if($operator === '*'){
                echo 'Multilply: ' . $num1 * $num2 . '<br>';
            }else if($operator === '/'){
                echo 'Division: ' . $num1 / $num2 . '<br>';
            }else{
                echo "Error";
            }
        }
        operation(70, '+' , 20) . '<br>';
        operation(11, '*' , 4) . '<br>';
        operation(65, '/' , 20) . '<br>';
    ?>
</body>
</html>