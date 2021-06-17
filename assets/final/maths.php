<!-- Absolute number -->
<div class="col col-12 col-lg-6 col-xl-4 content-block">
    <h4 class="demo-title">Absolute number</h4>

    <p class="demo-subtitle">Code:</p>
    <pre class="demo-code code">
    <strong>function</strong> returnAbsolute(){
        <strong>return</strong> abs(-30.5);
    }

    <strong>$absVariable</strong> = returnAbsolute();
    <strong>echo</strong> <strong>$absVariable</strong>;
    </pre>

    <p class="demo-subtitle">Result:</p>
    <?php
    function returnAbsolute(){
        return abs(-30.5);
    }

    $absVariable = returnAbsolute();
    echo "<p class='result-code code'>$absVariable</p>";
    ?>
</div>

<!-- Rounded to highest integer -->
<div class="col col-12 col-lg-6 col-xl-4 content-block">
    <h4 class="demo-title">Rounded to highest integer</h4>

    <p class="demo-subtitle">Code:</p>
    <pre class="demo-code code">
    <strong>function</strong> returnRounded(){
        <strong>return</strong> ceil(5.2);
    }

    <strong>$rndVariable</strong> = returnRounded();
    <strong>echo</strong> <strong>$rndVariable</strong>;
    </pre>

    <p class="demo-subtitle">Result:</p>
    <?php
    function returnRounded(){
    return ceil(5.2);
    }

    $rndVariable = returnRounded();
    echo "<p class='result-code code'>$rndVariable</p>";
    ?>
</div>

<!-- Highest number -->
<div class="col col-12 col-lg-6 col-xl-4 content-block">
    <h4 class="demo-title">Highest number</h4>

    <p class="demo-subtitle">Code:</p>
    <pre class="demo-code code">
    <strong>$numbersArray</strong> = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

    <strong>function</strong> returnHighest($array){
        <strong>return</strong> max($array);
    }

    <strong>$highVariable</strong> = returnHighest($numbersArray);
    <strong>echo</strong> <strong>$highVariable</strong>;
    </pre>

    <p class="demo-subtitle">Result:</p>
    <?php
    $numbersArray = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

    function returnHighest($array){
        return max($array);
    }

    $highVariable = returnHighest($numbersArray);
    echo "<p class='result-code code'>$highVariable</p>";
    ?>
</div>

<!-- Lowest number -->
<div class="col col-12 col-lg-6 col-xl-4 content-block">
    <h4 class="demo-title">Lowest number</h4>

    <p class="demo-subtitle">Code:</p>
    <pre class="demo-code code">
    <strong>$numbersArray</strong> = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

    <strong>function</strong> returnLowest($array){
        <strong>return</strong> min($array);
    }

    <strong>$lowVariable</strong> = returnLowest($numbersArray);
    <strong>echo</strong> <strong>$lowVariable</strong>;
    </pre>

    <p class="demo-subtitle">Result:</p>
    <?php
    $numbersArray = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

    function returnLowest($array){
        return min($array);
    }

    $lowVariable = returnLowest($numbersArray);
    echo "<p class='result-code code'>$lowVariable</p>";
    ?>
</div>

<!-- Random number -->
<div class="col col-12 col-lg-6 col-xl-4 content-block">
    <h4 class="demo-title">Random number</h4>

    <p class="demo-subtitle">Code:</p>
    <pre class="demo-code code">
    <strong>function</strong> returnRandom(){
        <strong>return</strong> rand(0, 100);
    }

    <strong>$rndVariable</strong> = returnRandom();
    <strong>echo</strong> <strong>$rndVariable</strong>;
    </pre>

    <p class="demo-subtitle">Result:</p>
    <?php
    function returnRandom(){
        return rand(0, 100);
    }

    $rndVariable = returnRandom();
    echo "<p class='result-code code'>$rndVariable</p>";
    ?>
</div>