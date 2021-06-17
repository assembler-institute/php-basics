<!-- "Y-m-d" date format -->
<div class="col col-12 col-lg-6 col-xl-4 content-block">
    <h4 class="demo-title">"Y-m-d" date format</h4>

    <p class="demo-subtitle">Code:</p>
    <pre class="demo-code code">
    <strong>$date</strong> = new <strong>DateTime()</strong>;
    <strong>echo</strong> <strong>$date</strong> -> format('Y-m-d');
    </pre>

    <p class="demo-subtitle">Result:</p>
    <?php
    $date = new DateTime();
    $newDate = $date -> format('Y-m-d');
    echo "<p class='result-code code'>$newDate</p>";
    ?>
</div>

<!-- Current date -->
<div class="col col-12 col-lg-6 col-xl-4 content-block">
    <h4 class="demo-title">Current date</h4>

    <p class="demo-subtitle">Code:</p>
    <pre class="demo-code code">
    <strong>echo</strong> <strong>$date</strong>("Y.m.d");;
    </pre>

    <p class="demo-subtitle">Result:</p>
    <?php
    $currentDate = date('Y.m.d');
    echo "<p class='result-code code'>$currentDate</p>";
    ?>
</div>

<!-- Current day -->
<div class="col col-12 col-lg-6 col-xl-4 content-block">
    <h4 class="demo-title">Current day</h4>

    <p class="demo-subtitle">Code:</p>
    <pre class="demo-code code">
    <strong>echo</strong> <strong>$date</strong>("D.d");;
    </pre>

    <p class="demo-subtitle">Result:</p>
    <?php
    $currentDay = date('D.d');
    echo "<p class='result-code code'>$currentDay</p>";
    ?>
</div>

<!-- Current month -->
<div class="col col-12 col-lg-6 col-xl-4 content-block">
    <h4 class="demo-title">Current month</h4>

    <p class="demo-subtitle">Code:</p>
    <pre class="demo-code code">
    <strong>echo</strong> <strong>$date</strong>("n");
    </pre>

    <p class="demo-subtitle">Result:</p>
    <?php
    $currentMonth = date('n');
    echo "<p class='result-code code'>$currentMonth</p>";
    ?>
</div>

<!-- Current minute -->
<div class="col col-12 col-lg-6 col-xl-4 content-block">
    <h4 class="demo-title">Current minute</h4>

    <p class="demo-subtitle">Code:</p>
    <pre class="demo-code code">
    <strong>echo</strong> <strong>$date</strong>("i");
    </pre>

    <p class="demo-subtitle">Result:</p>
    <?php
    $currentMinute = date('i');
    echo "<p class='result-code code'>$currentMinute</p>";
    ?>
</div>