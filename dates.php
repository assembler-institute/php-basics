<?php
    $fecha = new DateTime("NOW");
    echo $fecha -> format('Y-m-d');
    print "<br>";
    echo $fecha -> format('d')."<br>";
    echo $fecha ->format('m')."<br>";
    echo $fecha -> format('i')."<br>";

?>
