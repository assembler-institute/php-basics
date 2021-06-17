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