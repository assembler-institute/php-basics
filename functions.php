<?php

    function add($x, $y) {
        return $x + $y;
    }
    echo add(2, 3); // 5
    echo "<hr>";

    function multiply($x, $y) {
        return $x * $y;
    }
    echo multiply(2, 3); // 6
    echo "<hr>";

    function divide($x, $y) {
        return $x / $y;
    }
    echo divide(2, 3); // 0.66667
    echo "<hr>";

    function operate($op, $x, $y) {
        switch ($op) {
            case 'add':
                return add($x, $y);
                break;
            
            case 'subtract':
                return $x - $y;
                break;
            
            case 'multiply':
                return multiply($x, $y);
                break;
            
            case 'divide':
                return divide($x, $y);
                break;
            
            case 'power':
                return $x ** $y;
                break;
            
            case 'root':
                return $x ** (1/$y);
                break;
            
            default:
                return "Error: Invalid arguments";
                break;
        }
    }
    echo operate("root", 32, 5); // 2
    echo "<hr>";
    
?>