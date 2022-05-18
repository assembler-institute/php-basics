<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Functions</title>
</head>
<body>
    <?php
    function addNumbers ($num1, $num2) {
        return $num1+$num2;
    }
    function multiplyNumbers($num1, $num2){
        return $num1*$num2;
    }
    function divideNumbers($num1, $num2){
        return $num1/$num2;
    }
    function operateNumbers($num1, $num2, $operator) {
        switch($operator){
            case "add":
                return addNumbers($num1,$num2);
            case "multiply":
                return multiplyNumbers($num1,$num2);
            case "divide":
                return divideNumbers($num1,$num2);
            default:
            return Null;
    }
    }



    echo "<p>Add two numbers: ",addNumbers(1,2),"</p>";
    echo "<p>Multiply two numbers: ",multiplyNumbers(2,4),"</p>";
    echo "<p>Divide two numbers: ",divideNumbers(6,3),"</p>";
    echo "<p>Operate numbers: ",operateNumbers(6,3,"add"),"</p>";
    ?>
</body>
</html>