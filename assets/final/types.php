<!-- Assigning types -->
<div class="col col-12 col-lg-6 col-xl-4 content-block">
    <h4 class="demo-title">Assigning types</h4>

    <p class="demo-subtitle">Code:</p>
    <pre class="demo-code code">
    <strong>class</strong> myObject{
        <strong>function</strong> say_hi()
        {
            <strong>echo</strong> "Hello World.";
        }
    }
    
    <strong>$boolean</strong> = true;
    <strong>$integer</strong> = 12;
    <strong>$float</strong> = 25.5;
    <strong>$string</strong> = "Hello World";
    <strong>$array</strong> = array("This", "is", "an", "array");
    <strong>$object</strong> = new myObject;
    <strong>$nullVariable</strong> = null;

    <strong>echo</strong> gettype($boolean);
    <strong>echo</strong> gettype($integer);
    <strong>echo</strong> gettype($float);
    <strong>echo</strong> gettype($string);
    <strong>echo</strong> gettype($array);
    <strong>echo</strong> gettype($object);
    <strong>echo</strong> gettype($nullVariable);
    </pre>

    <p class="demo-subtitle">Result:</p>
    <?php
    $boolean = true;
    $integer = 12;
    $float = 25.5;
    $string = "Hello World";
    $array = array("This", "is", "an", "array");

    class myObject{
        function say_hi()
        {
            echo "Hello World.";
        }
    }

    $object = new myObject;
    $nullVariable = null;

    $booleanType = getType($boolean);
    $integerType = getType($integer);
    $floatType = getType($float);
    $stringType = getType($string);
    $arrayType = getType($array);
    $objectType = getType($object);
    $nullVariableType = getType($nullVariable);

    echo "<p class='result-code code'>$booleanType</p>";
    echo "<p class='result-code code'>$integerType</p>";
    echo "<p class='result-code code'>$floatType</p>";
    echo "<p class='result-code code'>$stringType</p>";
    echo "<p class='result-code code'>$arrayType</p>";
    echo "<p class='result-code code'>$objectType</p>";
    echo "<p class='result-code code'>$nullVariableType</p>";
    ?>
</div>