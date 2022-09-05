<?php

    #Date Time
    $tiempo = date('Y-m-d');
    echo $tiempo."<br><br>";

    # Current Date
    $tiempoHoy = date('d-m-Y');
    echo "La fecha de hoy es: ".$tiempoHoy."<br><br>";

    # Current Day

    $dia = date("w");
        if($dia == 0) echo "Hoy es: Domingo..";
        if($dia == 1) echo "Hoy es: Lunes...";
        if($dia == 2) echo "Hoy es: Martes..";
        if($dia == 3) echo "Hoy es: Miercoles.";
        if($dia == 4) echo "Hoy es: Jueves?";
        if($dia == 5) echo "Hoy es: Viernes!!!";
        if($dia == 6) echo "Hoy es: Sabado.";

    echo "<br><br>";

    # Current Month (1-12)

    $mes = date('n');
    echo "Es el mes numero: ".$mes."<br><br>";

    # Current Minute (00 - 59)
        
    $minutos = date('i');
    echo "Son los minutos actuales: ".$minutos."<br><br>";
    
?>