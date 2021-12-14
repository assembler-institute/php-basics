<?php
function sumar($arg_1, $arg_2){
    return $arg_1 + $arg_2;
};
function multiplicar($arg_1, $arg_2){
    return $arg_1 * $arg_2;
};
function dividir($arg_1, $arg_2){
    return $arg_1 / $arg_2;
};
function magic($arg_1, $arg_2, $arg_3){
    if ($arg_3 === "+"){
        $result = sumar($arg_1, $arg_2);
    }
    else if($arg_3 === "*"){
        $result = multiplicar($arg_1, $arg_2);
    }
    else if($arg_3 === "/"){
        $result = dividir($arg_1, $arg_2);
    }
    return $result;
};

echo sumar(5, 3)."<br>";
echo multiplicar(5,3)."<br>";
echo dividir(10,3)."<br>";
echo magic(10, 3, "/");

?>