<!-- Print string -->
<div class="col col-12 col-lg-6 col-xl-4 content-block">
    <h4 class="demo-title">Print string</h4>

    <p class="demo-subtitle">Code:</p>
    <pre class="demo-code code">
    <strong>print</strong> "Hello World!";
    </pre>

    <p class="demo-subtitle">Result:</p>
    <?php
    print "<p class='result-code code'>Hello World!</p>";
    ?>
</div>

<!-- Print string with variables -->
<div class="col col-12 col-lg-6 col-xl-4 content-block">
    <h4 class="demo-title">Print string with variables</h4>

    <p class="demo-subtitle">Code:</p>
    <pre class="demo-code code">
    <strong>$word</strong> = "World";
    <strong>print</strong> "Hello $word!";
    </pre>

    <p class="demo-subtitle">Result:</p>
    <?php
    $word = "World";
    print "<p class='result-code code'>Hello $word!</p>";
    ?>
</div>

<!-- Concatenate variables -->
<div class="col col-12 col-lg-6 col-xl-4 content-block">
    <h4 class="demo-title">Concatenate variables</h4>

    <p class="demo-subtitle">Code:</p>
    <pre class="demo-code code">
    <strong>$word1</strong> = "Hello";
    <strong>$word2</strong> = "World";
    <strong>print</strong> "$word1 $word2!";
    </pre>

    <p class="demo-subtitle">Result:</p>
    <?php
    $word1 = "Hello";
    $word2 = "World";
    print "<p class='result-code code'>$word1 $word2!</p>";
    ?>
</div>

<!-- Case sensitive replacement -->
<div class="col col-12 col-lg-6 col-xl-4 content-block">
    <h4 class="demo-title">Case sensitive replacement</h4>

    <p class="demo-subtitle">Code:</p>
    <pre class="demo-code code">
    <strong>$testString</strong> = "A quick fast John jumps over the lazy dog";
    <strong>echo</strong> str_replace("john", "jaguar", <strong>$testString</strong>);
    </pre>

    <p class="demo-subtitle">Result:</p>
    <?php
    $testString = "A quick fast John jumps over the lazy dog";
    $newString = str_replace("john", "jaguar", $testString);
    echo "<p class='result-code code'>$newString</p>";
    ?>
</div>

<!-- Case insensitive replacement -->
<div class="col col-12 col-lg-6 col-xl-4 content-block">
    <h4 class="demo-title">Case insensitive replacement</h4>

    <p class="demo-subtitle">Code:</p>
    <pre class="demo-code code">
    <strong>$testString</strong> = "A quick fast John jumps over the lazy dog";
    <strong>echo</strong> str_ireplace("john", "jaguar", <strong>$testString</strong>);
    </pre>

    <p class="demo-subtitle">Result:</p>
    <?php
    $testString = "A quick fast John jumps over the lazy dog";
    $newString = str_ireplace("john", "jaguar", $testString);
    echo "<p class='result-code code'>$newString</p>";
    ?>
</div>

<!-- Repeat string N times -->
<div class="col col-12 col-lg-6 col-xl-4 content-block">
    <h4 class="demo-title">Repeat string N times</h4>

    <p class="demo-subtitle">Code:</p>
    <pre class="demo-code code">
    <strong>$testString</strong> = "A quick fast jaguar jumps over the lazy dog";
    <strong>$nTimes</strong> = 10;
    <strong>echo</strong> str_repeat("<strong>$testString</strong>", <strong>$nTimes</strong>);
    </pre>

    <p class="demo-subtitle">Result:</p>
    <?php
    $testString = "A quick fast jaguar jumps over the lazy dog";
    $nTimes = 10;
    $newString = str_repeat("$testString <br>", $nTimes);
    echo "<p class='result-code code'>$newString</p>";
    ?>
</div>

<!-- String length -->
<div class="col col-12 col-lg-6 col-xl-4 content-block">
    <h4 class="demo-title">String length</h4>

    <p class="demo-subtitle">Code:</p>
    <pre class="demo-code code">
    <strong>$testString</strong> = "A quick fast jaguar jumps over the lazy dog";
    <strong>echo</strong> strlen(<strong>$testString</strong>);
    </pre>

    <p class="demo-subtitle">Result:</p>
    <?php
    $testString = "A quick fast jaguar jumps over the lazy dog";
    $newString = strlen($testString);
    echo "<p class='result-code code'>$newString</p>";
    ?>
</div>

<!-- Position of first occurrence -->
<div class="col col-12 col-lg-6 col-xl-4 content-block">
    <h4 class="demo-title">Position of first occurrence</h4>

    <p class="demo-subtitle">Code:</p>
    <pre class="demo-code code">
    <strong>$repetitiveString</strong> = "Tell me if I'm repetitive. 
    I am repetitive, right? 
    Maybe I'm a bit to much repetitive";
    <strong>echo</strong> stripos(<strong>$repetitiveString</strong>, "repetitive");
    </pre>

    <p class="demo-subtitle">Result:</p>
    <?php
    $repetitiveString = "Tell me if I'm repetitive. I am repetitive, right? Maybe I'm a bit to much repetitive";
    $occurrencePos = stripos($repetitiveString, "repetitive");
    echo "<p class='result-code code'>$occurrencePos</p>";
    ?>
</div>

<!-- Capitalized string -->
<div class="col col-12 col-lg-6 col-xl-4 content-block">
    <h4 class="demo-title">Capitalized string</h4>

    <p class="demo-subtitle">Code:</p>
    <pre class="demo-code code">
    <strong>$testString</strong> = "A quick fast jaguar jumps over the lazy dog";
    <strong>echo</strong> strtoupper(<strong>$testString</strong>);
    </pre>

    <p class="demo-subtitle">Result:</p>
    <?php
    $testString = "A quick fast jaguar jumps over the lazy dog";
    $newString = strtoupper($testString);
    echo "<p class='result-code code'>$newString</p>";
    ?>
</div>

<!-- Lowercase string -->
<div class="col col-12 col-lg-6 col-xl-4 content-block">
    <h4 class="demo-title">Lowercase string</h4>

    <p class="demo-subtitle">Code:</p>
    <pre class="demo-code code">
    <strong>$testString</strong> = "A quick fast jaguar jumps over the lazy dog";
    <strong>echo</strong> strtolower(<strong>$testString</strong>);
    </pre>

    <p class="demo-subtitle">Result:</p>
    <?php
    $testString = "A quick fast jaguar jumps over the lazy dog";
    $newString = strtolower($testString);
    echo "<p class='result-code code'>$newString</p>";
    ?>
</div>

<!-- Create substring -->
<div class="col col-12 col-lg-6 col-xl-4 content-block">
    <h4 class="demo-title">Create substring</h4>

    <p class="demo-subtitle">Code:</p>
    <pre class="demo-code code">
    <strong>$testString</strong> = "A quick fast jaguar jumps over the lazy dog";
    <strong>echo</strong> substr(<strong>$testString</strong>, -12);
    </pre>

    <p class="demo-subtitle">Result:</p>
    <?php
    $testString = "A quick fast jaguar jumps over the lazy dog";
    $newString = substr($testString, -12);
    echo "<p class='result-code code'>$newString</p>";
    ?>
</div>