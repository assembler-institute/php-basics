<!-- Arithmetic operators -->
<div class="col col-12 col-sm-6 col-lg-4 content-block">
    <h4 class="demo-title">Arithmetic operators</h4>

    <p class="demo-subtitle">Code:</p>
    <pre class="demo-code code">
    <strong>$addition</strong> = 3 + 5;
    <strong>$subtraction</strong> = 6 - 2;
    <strong>$multiplication</strong> = 4 * 3;
    <strong>$division</strong> = 10 / 2;
    <strong>$modulor</strong> = 15%4;

    <strong>echo</strong> "Addition: <strong>$addition</strong>. Subtraction: <strong>$subtraction</strong>.
    Multiplication: <strong>$multiplication</strong>. Division: <strong>$division</strong>.
    Modulor: <strong>$modulor</strong>.";

    </pre>

    <p class="demo-subtitle">Result:</p>
    <?php
    $addition = 3 + 5;
    $subtraction = 6 - 2;
    $multiplication = 4 * 3;
    $division = 10 / 2;
    $modulor = 15%4;

    echo "<p class='result-code code'>Addition: $addition <br>Subtraction: $subtraction <br>Multiplication: $multiplication <br>Division: $division <br>Modulor: $modulor</p>";
    ?>
</div>

<!-- Comparison operators -->
<div class="col col-12 col-sm-6 col-lg-4 content-block">
    <h4 class="demo-title">Comparison operators</h4>

    <p class="demo-subtitle">Code:</p>
    <pre class="demo-code code">
    <strong>echo</strong> "Equal: 1==1 ", <strong>var_dump</strong>(1==1);
    <strong>echo</strong> "Not equal: 1!=1 ", <strong>var_dump</strong>(1!=1);
    <strong>echo</strong> "Less than: 1&lt;2 ", <strong>var_dump</strong>(1&lt;2);
    <strong>echo</strong> "Greater than: 1>2 ", <strong>var_dump</strong>(1>2);
    <strong>echo</strong> "Less or equal than: 1<=2 ", <strong>var_dump</strong>(1<=2);
    <strong>echo</strong> "Greater or equal than: 1>=2 ", <strong>var_dump</strong>(1>=2);
    </pre>

    <p class="demo-subtitle">Result:</p>
    <?php
    echo "<p class='result-code code'>Equal: 1==1 ", var_dump(1==1), "</p>";
    echo "<p class='result-code code'>Not equal: 1!=1 ", var_dump(1!=1), "</p>";
    echo "<p class='result-code code'>Less than: 1<2 ", var_dump(1<2), "</p>";
    echo "<p class='result-code code'>Greater than: 1>2 ", var_dump(1>2), "</p>";
    echo "<p class='result-code code'>Less or equal than: 1<=2 ", var_dump(1<=2), "</p>";
    echo "<p class='result-code code'>Greater or equal than: 1>=2 ", var_dump(1>=2), "</p>";
?>
</div>

<!-- Logical operators -->
<div class="col col-12 col-sm-6 col-lg-4 content-block">
    <h4 class="demo-title">Logical operators</h4>

    <p class="demo-subtitle">Code:</p>
    <pre class="demo-code code">
    <strong>echo</strong> "true && true: ", <strong>var_dump</strong>(true && false);
    <strong>echo</strong> "true || false: ", <strong>var_dump</strong>(true || false);
    <strong>echo</strong> "!false: ", <strong>var_dump</strong>(!false);
    <strong>echo</strong> "false xor true: ", <strong>var_dump</strong>(false xor true);
    </pre>

    <p class="demo-subtitle">Result:</p>
    <?php
    echo "<p class='result-code code'>true && true: ", var_dump(true && false), "</p>";
    echo "<p class='result-code code'>true || false: ", var_dump(true || false), "</p>";
    echo "<p class='result-code code'>!false: ", var_dump(!false), "<br>";
    echo "<p class='result-code code'>false xor true: ", var_dump(false xor true), "</p>";
    ?>
</div>