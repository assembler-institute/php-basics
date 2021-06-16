<!-- Echo message -->
<div class="col col-12 col-sm-6 col-lg-4 content-block">
    <h4 class="demo-title">Echo message</h4>

    <p class="demo-subtitle">Code:</p>
    <pre class="demo-code code">
        <strong>echo</strong> "Echo message.";
    </pre>

    <p class="demo-subtitle">Result:</p>
    <?php
    echo "<p class='result-code code'>Echo message.</p>"
    ?>
</div>

<!-- Print message -->
<div class="col col-12 col-sm-6 col-lg-4 content-block">
    <h4 class="demo-title">Print message</h4>

    <p class="demo-subtitle">Code:</p>
    <pre class="demo-code code">
        <strong>print</strong> "Print message.";
    </pre>

    <p class="demo-subtitle">Result:</p>
    <?php
    echo "<p class='result-code code'>Print message.</p>"
    ?>
</div>

<!-- print_r() message -->
<div class="col col-12 col-sm-6 col-lg-4 content-block">
    <h4 class="demo-title">print_r() message</h4>

    <p class="demo-subtitle">Code:</p>
    <pre class="demo-code code">
        <strong>$demoobject</strong> = array("name" => "Ricard", "lastName" => "Garcia", "petName" => "Alai");
        <strong>echo</strong> print_r($demoobject, true);

    </pre>

    <p class="demo-subtitle">Result:</p>
    <?php
    $demoobject = array("name" => "Ricard", "lastName" => "Garcia", "petName" => "Alai");
    echo "<pre class='result-code code'>", print_r($demoobject, true), "</pre>";
    ?>
</div>