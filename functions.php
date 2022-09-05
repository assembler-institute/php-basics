<?php
    # FUNCTION SUM
    function sumar($a, $b) {
        $num = 10;
        return "($a + $num) =".($a + $num)."<br>($b + $num) =".($b + $num)."<br>";
    }
    echo sumar(5, 6)."<br><br>";


    # FUNCTION MULTIPLY
    function multiplicar($a, $b) {
        $cien = 100;
        return "($a * $cien) =".($a * $cien)."<br>($b * $cien) =".($b * $cien)."<br>";
    }
    echo multiplicar(2, 10)."<br><br>";


    # FUNCTION DIVIDE
    function dividir($a, $b) {
        $mitad = 2;
        return "($a / $mitad) =".($a / $mitad)."<br>($b / $mitad) =".($b / $mitad)."<br>";
    }
    echo dividir(10, 150)."<br><br>";


    # FUNCTION ADD/MULTIPLY/DIVIDE AND "RETURN"
    function operaciones($a, $b, $c) {
        return ($a + $b / $c);
    }
    echo operaciones(10, 20, 2)."<br><br>";

?>