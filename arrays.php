<?php
# ARRAY + STRING
    print_r (array("Hola", "Como estas", "Adios"));
    echo "<br><br>";

# ARRAY + NUMBER + DECIMAL NUMBER
    print_r (array(1, 2, 3, 4, 1.2, 4.6, 7.8, 10));
    echo "<br><br>";

# MULTIDIMENSIONAL ARRAY
    $animales = array (
        "Marinos" => array (
            1 => "Delfin", 2 => "Ballena", 3 => "Tiburon"
        ),
        "Terrestres" => array (
            1 => "Leon", 2 => "Mono", 3 => "Perro"
        ),
    );
    print_r ($animales);
    echo "<br><br>";

# FUNCTION ARRAY LENGTH
    $myArr = array(0, 1, 2, 3);
    function contador($e) {
        return "La longitud(length) del array es: ".count($e)."<br><br>";
    }
    echo contador($myArr);
#count

# FUNCTION WITH 2 ARRAYS
    $mySecondArr = array(10, 11, 12);
    function unirArr($arr1, $arr2) {
        $result = array_merge($arr1, $arr2);
        print_r ($result);
    }
    echo unirArr($myArr, $mySecondArr)."<br><br>";
#array_merge

# FUNCTION ARRAY LAST ELEMENT
    function lastEle($e) {
        return "El ultimo valor del array es: ".end($e);
    }
    print_r($myArr);
    echo lastEle($myArr)."<br><br>";
#end

# FUNCTION ADD NEW ELEMENT TO THE ARRAY
    function addEle($e, $a) {
        array_push($e, $a);
        print_r ($e);
    }
    echo addEle($myArr, 200);

#array_push

?>