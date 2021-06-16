<!-- For loop -->
<div class="col col-12 col-sm-6 col-lg-4 content-block">
    <h4 class="demo-title">For loop</h4>

    <p class="demo-subtitle">Code:</p>
    <pre class="demo-code code">
    <strong>$maxNum</strong> = 5;
    <strong>for</strong> ($i = 0; $i < $maxNum; $i++){
        echo "Number $i hasn't reached $maxNum";
    }
    </pre>

    <p class="demo-subtitle">Result:</p>
    <?php
    $maxNum = 5;
    for ($i = 0; $i < $maxNum; $i++){
        echo "<p class='result-code code'> Number $i hasn't reached $maxNum </p>";
    }
    ?>
</div>

<!-- Foreach loop -->
<div class="col col-12 col-sm-6 col-lg-4 content-block">
    <h4 class="demo-title">Foreach loop</h4>

    <p class="demo-subtitle">Code:</p>
    <pre class="demo-code code">
    <strong>$testArr</strong> = array("John", "Paul", "George", "Ringo");
    <strong>foreach</strong>($testArr <strong>as</strong> $beatle){
        <strong>echo</strong> "$beatle was a Beatle ";
    }
    </pre>

    <p class="demo-subtitle">Result:</p>
    <?php
    $testArr = array("John", "Paul", "George", "Ringo");
    foreach($testArr as $beatle){
        echo "<p class='result-code code'>$beatle was a Beatle<br></p>";
    }
    ?>
</div>

<!-- While loop -->
<div class="col col-12 col-sm-6 col-lg-4 content-block">
    <h4 class="demo-title">While loop</h4>

    <p class="demo-subtitle">Code:</p>
    <pre class="demo-code code">
    <strong>$whileNum</strong> = 0;
    <strong>$maxNum</strong> = 10;

    <strong>while</strong>(<strong>$whileNum</strong> <= <strong>$maxNum</strong>){
        <strong>echo</strong> "Current number <strong>$whileNum</strong>";
        <strong>$whileNum</strong>++;
    }
    </pre>

    <p class="demo-subtitle">Result:</p>
    <?php
    $whileNum = 0;
    $maxNum = 10;

    while($whileNum <= $maxNum){
        echo "<p class='result-code code'>Current number $whileNum </p>";
        $whileNum++;
    }
    ?>
</div>

<!-- Do/while loop -->
<div class="col col-12 col-sm-6 col-lg-4 content-block">
    <h4 class="demo-title">Do/while loop</h4>

    <p class="demo-subtitle">Code:</p>
    <pre class="demo-code code">
    <strong>$doWhileNum</strong> = 0;

    <strong>do</strong>{
        <strong>echo</strong> "Current number <strong>$doWhileNum</strong>";
        <strong>$doWhileNum</strong>++;
    } <strong>while</strong>( <strong>$doWhileNum</strong> <= <strong>$maxNum</strong>);
    </pre>

    <p class="demo-subtitle">Result:</p>
    <?php
    $doWhileNum = 0;

    do{
        echo "<p class='result-code code'>Current number $doWhileNum <br></p>";
        $doWhileNum++;
    } while( $doWhileNum <= $maxNum);
    ?>
</div>

