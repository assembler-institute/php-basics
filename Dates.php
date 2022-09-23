<?php
    echo "<h1>Dates</h1>";

    $d = new DateTime("now");
    echo $d->format("y-m-d"),"\n";
    echo $d->format("d"),"\n";
    echo $d->format("m"),"\n";
    echo $d->format("i"),"\n";
?>