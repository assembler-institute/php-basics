<?php
    echo "<h1>Functions</h1>";

    #function to sum two numbers
    function sum($num1, $num2) {
        return $num1 + $num2;
    };

    echo "<p>The result of 2 + 5 = ", sum(2, 5),"</p>";

    #function to multiply two numbers
    function mul($num1, $num2) {
        return $num1 * $num2;
    }

    echo "<p>The result of 2 x 5 = ", mul(2, 5),"</p>";

    #function to divide two numbers
    function div($num1, $num2) {
        return $num1 / $num2;
    }

    echo "<p>The result of 10 / 2 = ", div(10, 2),"</p>";

    #function
    function operations($num1, $num2, $type) {
        if($type == "add" || $type == "+") {
            echo "$num1 + $num2 = ",sum($num1, $num2);
        } elseif($type == "multiply" || $type == "*" || $type == "x") {
            echo "$num1 x $num2 = ",mul($num1, $num2);
        } elseif($type == "divide" || $type == "/") {
            echo "$num1 / $num2 = ",div($num1, $num2);
        } else {
            echo "Please enter a valid operation";
        }
    }

    operations(8, 2, "/");
?>