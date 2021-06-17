<!-- Addition function -->
<div class="col col-12 col-lg-6 col-xl-4 content-block">
    <h4 class="demo-title">Addition function</h4>

    <p class="demo-subtitle">Code:</p>
    <pre class="demo-code code">
    <strong>$num1</strong> = 4;
    <strong>$num2</strong> = 6;

    <strong>function</strong> additionFunction(<strong>$x</strong>, <strong>$y</strong>){
    <strong>echo $x</strong>+<strong>$y</strong>;
    }

    additionFunction(<strong>$num1</strong>, <strong>$num2</strong>);
    </pre>

    <p class="demo-subtitle">Result:</p>
    <?php
    $num1 = 4;
    $num2 = 6;

    function additionFunction($x, $y){
        $sum = $x + $y;
        echo "<p class='result-code code'>$sum</p>";
    }

    additionFunction($num1, $num2);
    ?>
</div>

<!-- Multiplication function -->
<div class="col col-12 col-lg-6 col-xl-4 content-block">
    <h4 class="demo-title">Multiplication function</h4>

    <p class="demo-subtitle">Code:</p>
    <pre class="demo-code code">
    <strong>$num1</strong> = 5;
    <strong>$num2</strong> = 3;

    <strong>function</strong> multiplicationFunction(<strong>$x</strong>, <strong>$y</strong>){
    <strong>echo $x</strong>*<strong>$y</strong>;
    }

    multiplicationFunction(<strong>$num1</strong>, <strong>$num2</strong>);
    </pre>

    <p class="demo-subtitle">Result:</p>
    <?php
    $num1 = 5;
    $num2 = 3;

    function multFunction($x, $y){
        $mult = $x * $y;
        echo "<p class='result-code code'>$mult</p>";
    }

    multFunction($num1, $num2);
    ?>
</div>

<!-- Division function -->
<div class="col col-12 col-lg-6 col-xl-4 content-block">
    <h4 class="demo-title">Division function</h4>

    <p class="demo-subtitle">Code:</p>
    <pre class="demo-code code">
    <strong>$num1</strong> = 24;
    <strong>$num2</strong> = 2;

    <strong>function</strong> divisionFunction(<strong>$x</strong>, <strong>$y</strong>){
    <strong>echo $x</strong>/<strong>$y</strong>;
    }

    divisionFunction(<strong>$num1</strong>, <strong>$num2</strong>);
    </pre>

    <p class="demo-subtitle">Result:</p>
    <?php
    $num1 = 24;
    $num2 = 2;

    function divFunction($x, $y){
        $div = $x / $y;
        echo "<p class='result-code code'>$div</p>";
    }

    divFunction($num1, $num2);
    ?>
</div>

<!-- Multiple operation function -->
<div class="col col-12 col-lg-6 col-xl-4 content-block">
    <h4 class="demo-title">Multiple operation function</h4>

    <p class="demo-subtitle">Code:</p>
    <pre class="demo-code code">
    <strong>$num1</strong> = 30;
    <strong>$num2</strong> = 6;
    <strong>$operation</strong> = "division";

    <strong>function</strong> operationFunction(<strong>$x</strong>, <strong>$y</strong>, <strong>$op</strong>){
        <strong>if</strong> (<strong>$op</strong> == "addition"){
            <strong>echo $x</strong> + <strong>$y</strong>;
        }
        <strong>elseif</strong> (<strong>$op</strong> == "multiplication"){
            <strong>echo $x</strong> * <strong>$y</strong>;
        }
        <strong>elseif</strong> (<strong>$op</strong> == "division"){
            <strong>echo $x</strong> / <strong>$y</strong>;
        } <strong>else</strong> {
            <strong>echo</strong> "Not a valid operation";
        }
    }

    operationFunction($num1, $num2, $operation);
    </pre>

    <p class="demo-subtitle">Result:</p>
    <?php
    $num1 = 30;
    $num2 = 6;
    $operation = "division";

    function operationFunction($x, $y, $op){
        if ($op == "addition"){
            $sum = $x + $y;
            echo "<p class='result-code code'>$sum</p>";
        }
        elseif ($op == "multiplication"){
            $mult = $x * $y;
            echo "<p class='result-code code'>$mult</p>";
        }
        elseif ($op == "division"){
            $div = $x / $y;
            echo "<p class='result-code code'>$div</p>";

        } else {
            echo "Not a valid operation";
        }
    }

    operationFunction($num1, $num2, $operation);
    ?>
</div>
