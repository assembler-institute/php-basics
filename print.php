<?php

    echo "echo example\n";

    print "print example\n";

    $text = array ("a" => "echo", "b" => "print", "c" => "print_r");

    $bool = true;
    $result = print_r($text, $bool);
    print_r($result);

?>
