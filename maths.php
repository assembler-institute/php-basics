<?php

    $a = -3.87;

    $abs = abs($a);
    echo abs($abs); // 3.87
    echo "<hr>";

    $rou = round($a);
    echo round($rou); // -4
    echo "<hr>";

    function highestNum () {
        $nums = func_get_args();
        $highestNum = $nums[0];
        foreach ($nums as $n) {
            if ($n > $highestNum) {
                $highestNum = $n;
            }
        }
        return $highestNum;
    }
    $result = highestNum(2, 4, 6, 2, 7, 4, 8, 5); 
    echo $result; // 8
    echo "<hr>";

    function lowestNum () {
        $nums = func_get_args();
        $lowestNum = $nums[0];
        foreach ($nums as $n) {
            if ($n < $lowestNum) {
                $lowestNum = $n;
            }
        }
        return $lowestNum;
    }
    $result = lowestNum(2, 4, 6, 2, 7, -4, 8, 5); 
    echo $result; // -4
    echo "<hr>";

    $ran = rand();
    echo $ran; // <-- random integer

?>