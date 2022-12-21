<?php
    
    print('EXERCISE A: <br><br>');
    print(" <hr>");

    print('<strong>SUM FUNCTION:</strong> ');
    $a = 6;
    $b = 11;
    function addNums ($a, $b) {
        $c = $a + $b;
        return $c;
    }
    echo addNums($a,$b);
    print("<br><br> <hr>");

    print('<strong>MULTIPLY FUNCTION</strong> ');
    $a = 6;
    $b = 11;
    function multiplyNums ($a, $b) {
        $c = $a * $b;
        return $c;
    }
    echo multiplyNums($a,$b);
    print("<br><br> <hr>");

    print('<strong>DIVISION FUNCTION</strong> ');
    $a = 6;
    $b = 11;
    function divideNums($a, $b) {
        $c = $a / $b;
        return $c;
    }
    echo divideNums($a,$b);
    print("<br><br> <hr>");

    print('<strong>COMPLETE FUNCTION</strong> ');
    $a = 6;
    $b = 11;
    $c = '*';
    function completeNums($a, $b, $c) {
        switch ($c) {
            case '*':
                $c = $a * $b;
                return $c;
            break;
            case '/':
                $c = $a / $b;
                return $c;
            break;
            case '+':
                $c = $a / $b;
                return $c;
            break;
    }
    }
    echo completeNums($a,$b,$c);
    print("<br><br> <hr>");

    print('<strong>COMPLETE FUNCTION</strong> ');
    $a = 6;
    $b = 11;
    $c = '/';
    function allFuncs($a, $b, $c) {
        switch ($c) {
            case '*':
                return(multiplyNums($a, $b));
            break;
            case '/':
                return(divideNums($a, $b));
            break;
            case '+':
                return(addNums($a, $b));
            break;
    }
    }
    echo allFuncs($a,$b,$c);
    print("<br><br> <hr>");

?>