<div>
<h3>Using Types</h3>
<div class="valueTypes">
    <h4>value types</h4>
    <h5>
        <?php
    $boolType = true;
    $intType = 123;
    $floatType = 3.65;
    $strType = "It is String type"; 
    $arrType = array("A"=> array("Apple", "Airplane"), "B"=> array("Brain, Bus"), "C"=> array("Car", "Cow"));
    $objType = (object) array("Apple" => "Red", "Banana" => "Yellow");
    $nullType = NULL;
    echo '$boolType = true;</br>
    $intType = 123;</br>
    $floatType = 3.65;</br>
    $strType = "It is String type"; </br>
    $arrType = array("A"=> array("Apple", "Airplane"), "B"=> array("Brain, Bus"), "C"=> array("Car", "Cow"));</br>
    $objType = (object) array("Apple" => "Red", "Banana" => "Yellow");</br>
    $nullType = NULL;</br>';
    echo '$boolType = true;</br> <p>output: </p>';
    var_dump($boolType);
    echo "</br>";
    var_dump($intType);
    echo "</br>";
    var_dump($floatType);
    echo "</br>";
    var_dump($strType);
    echo "</br>";
    var_dump($arrType);
    echo "</br>";
    var_dump($objType);
    echo "</br>";
    var_dump($nullType);
    ?>  
    </h5>
  
</div>
<h4></h4>
</div>