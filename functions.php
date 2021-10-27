<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function sum($x, $y){
            print "Sum:" . $x + $y . "\n";
        }
        function mult($x, $y){
            print "Multiplication:" . $x * $y . "\n";
        }
        function div($x, $y){
            print "Division:" . $x / $y . "\n";
        }
        function calc($x, $y, $a){
            switch($a){
                case "+":
                    print "Sum:" . $x + $y . "\n";
                    break;
                case "-":
                    print "Rest:" . $x - $y . "\n";
                    break;
                case "*":
                    print "Multiplication:" . $x * $y . "\n";
                    break;
                case "/":
                    print "Division:" . $x / $y . "\n";
                    break;

            }
        }
        sum(10, 5);
        mult(5, 5);
        div(80, 10);
        calc(5, 10, "*");
    ?>
</body>
</html>