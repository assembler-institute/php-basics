<!-- Array of strings -->
<div class="col col-12 col-lg-6 col-xl-4 content-block">
    <h4 class="demo-title">Array of strings</h4>

    <p class="demo-subtitle">Code:</p>
    <pre class="demo-code code">
    <strong>$strArray</strong> = array("Hello", "this", "is", "an", "array");
    <strong>print_r</strong>(<strong>$strArray</strong>);
    </pre>

    <p class="demo-subtitle">Result:</p>
    <?php
    $strArray = array("Hello", "this", "is", "an", "array");
    echo "<pre class='result-code code'>", print_r($strArray, true), "</pre>";
    ?>
</div>

<!-- Array of numbers -->
<div class="col col-12 col-lg-6 col-xl-4 content-block">
    <h4 class="demo-title">Array of numbers</h4>

    <p class="demo-subtitle">Code:</p>
    <pre class="demo-code code">
    <strong>$numArray</strong> = array(2, 4, 5.6, -24, 28.5);
    <strong>print_r</strong>(<strong>$numArray</strong>);
    </pre>

    <p class="demo-subtitle">Result:</p>
    <?php
    $numArray = array(2, 4, 5.6, -24, 28.5);
    echo "<pre class='result-code code'>", print_r($numArray, true), "</pre>";
    ?>
</div>

<!-- Multidimensional array -->
<div class="col col-12 col-lg-6 col-xl-4 content-block">
    <h4 class="demo-title">Multidimensional array</h4>

    <p class="demo-subtitle">Code:</p>
    <pre class="demo-code code">
    <strong>$bealtes</strong> = array(
        array("John", "Guitar"),
        array("Paul", "Bass"),
        array("George", "Guitar"),
        array("Ringo", "Drums")
    );
    <strong>print_r</strong>(<strong>$bealtes</strong>);
    </pre>

    <p class="demo-subtitle">Result:</p>
    <?php
    $bealtes = array(
    array("John", "Guitar"),
    array("Paul", "Bass"),
    array("George", "Guitar"),
    array("Ringo", "Drums")
    );

    echo "<pre class='result-code code'>", print_r($bealtes, true), "</pre>";
    ?>
</div>

<!-- Array length -->
<div class="col col-12 col-lg-6 col-xl-4 content-block">
    <h4 class="demo-title">Array of numbers</h4>

    <p class="demo-subtitle">Code:</p>
    <pre class="demo-code code">
    <strong>$lenArray</strong> = array(1, 2, 3, 4, 5, 6);
    <strong>echo</strong> count(<strong>$lenArray</strong>);
    </pre>

    <p class="demo-subtitle">Result:</p>
    <?php
    $numArray = array(1, 2, 3, 4, 5, 6);
    $lenArr =  count($numArray);

    echo "<pre class='result-code code'>$lenArr</pre>";
    ?>
</div>

<!-- Array combination -->
<div class="col col-12 col-lg-6 col-xl-4 content-block">
    <h4 class="demo-title">Array combination</h4>

    <p class="demo-subtitle">Code:</p>
    <pre class="demo-code code">
    <strong>$array1</strong> = array(1, 2, 3, 4, 5, 6);
    <strong>$array2</strong> = array("a", "b", "c", "d", "e", "f");
    <strong>$combinedArr</strong> = array_merge(<strong>$array1</strong>, <strong>$array2</strong>);
    <strong>echo</strong> print_r(<strong>$lenArray</strong>);
    </pre>

    <p class="demo-subtitle">Result:</p>
    <?php
    $array1 = array(1, 2, 3, 4, 5, 6);
    $array2 = array("a", "b", "c", "d", "e", "f");
    $combinedArr = array_merge($array1, $array2);
    echo "<pre class='result-code code'>", print_r($combinedArr, true), "</pre>";
    ?>
</div>

<!-- Last element -->
<div class="col col-12 col-lg-6 col-xl-4 content-block">
    <h4 class="demo-title">Last element</h4>

    <p class="demo-subtitle">Code:</p>
    <pre class="demo-code code">
    <strong>$testArray</strong> = array(1, 2, 3, 4, 5, 6);
    <strong>echo</strong> end(<strong>$testArray</strong>);
    </pre>

    <p class="demo-subtitle">Result:</p>
    <?php
    $testArray = array(1, 2, 3, 4, 5, 6);
    $lastElement = end($testArray);

    echo "<pre class='result-code code'>$lastElement</pre>";
    ?>
</div>

<!-- Add element -->
<div class="col col-12 col-lg-6 col-xl-4 content-block">
    <h4 class="demo-title">Last element</h4>

    <p class="demo-subtitle">Code:</p>
    <pre class="demo-code code">
    <strong>$testArray</strong> = array(1, 2, 3, 4, 5, 6);
    array_push(<strong>$testArray</strong>, 7);
    <strong>echo</strong> print_r(<strong>$testArray</strong>);
    </pre>

    <p class="demo-subtitle">Result:</p>
    <?php
    $testArray = array(1, 2, 3, 4, 5, 6);
    array_push($testArray, 7);
    echo "<pre class='result-code code'>", print_r($testArray, true), "</pre>";
    ?>
</div>