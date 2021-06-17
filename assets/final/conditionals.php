<!-- If statement -->
<div class="col col-12 col-lg-6 col-xl-4 content-block">
    <h4 class="demo-title">If statement</h4>

    <p class="demo-subtitle">Code:</p>
    <pre class="demo-code code">
    <strong>$currentDay</strong> = date("l");
    <strong>if</strong> (<strong>$currentDay</strong> == "Monday"){
        <strong>echo</strong> "Today is Monday";
    }
    </pre>
    <!-- } <strong>else</strong> {
        <strong>echo</strong> "Not Monday, today is <strong>$currentDay</strong>";
    } -->
    
    <p class="demo-subtitle">Result:</p>
    <?php
    $currentDay = date("l");

    if ($currentDay == "Monday"){
        echo "<p class='result-code code'>Today is Monday</p>";
    } 
    //else {
    //     echo "<p class='result-code code'>Not Monday, today is $currentDay</p>";
    // }
    ?>
</div>

<!-- If/Else statement -->
<div class="col col-12 col-lg-6 col-xl-4 content-block">
    <h4 class="demo-title">If/Else statement</h4>

    <p class="demo-subtitle">Code:</p>
    <pre class="demo-code code">
    <strong>$currentMonth</strong> = new DateTime();
    <strong>if</strong> (<strong>$currentMonth</strong> == "October"){
        <strong>echo</strong> "It is October";
    } <strong>else</strong> {
        <strong>echo</strong> "Not October, we are in <strong>$currentMonth</strong> -> format("F")";
    }
    </pre>

    <p class="demo-subtitle">Result:</p>
    <?php
    $currentMonth = new DateTime();

    if (date("F") == "October"){
        echo "<p class='result-code code'>It is October</p>";
    } else {
        $month = $currentMonth -> format('F');
        echo "<p class='result-code code'>Not October, we are in $month</p>";
    }
    ?>
</div>

<!-- If/Elseif/Else statement -->
<div class="col col-12 col-lg-6 col-xl-4 content-block">
    <h4 class="demo-title">If/Elseif/Else statement</h4>

    <p class="demo-subtitle">Code:</p>
    <pre class="demo-code code">
    <strong>$currentMinute</strong> = date("i");

    <strong>if</strong> (<strong>$currentMinute</strong> < 10){
        <strong>echo</strong> "The current minute is less than 10";
    } <strong>elseif</strong> (<strong>$currentMinute</strong> > 15){
        <strong>echo</strong> "The current minute is more than 15";
    } <strong>else</strong> {
        <strong>echo</strong> "Does not meet any conditions";
    }
    </pre>

    <p class="demo-subtitle">Result:</p>
    <?php
    $currentMinute = date("i");

    if ($currentMinute < 10){
        echo "<p class='result-code code'>The current minute is less than 10</p>";
    } elseif ($currentMinute > 15){
        echo "<p class='result-code code'>The current minute is more than 15</p>";
    } else {
        echo "<p class='result-code code'>Does not meet any conditions</p>";
    }
    ?>
</div>

<!-- Switch statement -->
<div class="col col-12 col-lg-6 col-xl-4 content-block">
    <h4 class="demo-title">Switch statement</h4>

    <p class="demo-subtitle">Code:</p>
    <pre class="demo-code code">
    <strong>$currentWeekday</strong> = date("l");

    <strong>switch</strong>(<strong>$currentWeekday</strong>){
        <strong>case</strong> "Monday":
            <strong>echo</strong> "Still the beginning of the week :___)";
            <strong>break</strong>;
        <strong>case</strong> "Tuesday":
            <strong>echo</strong> "Still the beginning of the week :___)";
            <strong>break</strong>;
        <strong>case</strong> "Wednesday":
            <strong>echo</strong> "Mid-week, almost done!";
            <strong>break</strong>;
        <strong>case</strong> "Thursday":
            <strong>echo</strong> "Mid-week, almost done!";
            <strong>break</strong>;
        <strong>case</strong> "Friday":
            <strong>echo</strong> "It's Friday, yay!";
            <strong>break</strong>;
        <strong>case</strong> "Saturday":
            <strong>echo</strong> "Enjoy the weekend!";
            <strong>break</strong>;
        <strong>case</strong> "Sunday":
            <strong>echo</strong> "Enjoy the weekend!";
            <strong>break</strong>;
        <strong>default</strong>:
            <strong>echo</strong> "Not valid weekday";
    }
    </pre>

    <p class="demo-subtitle">Result:</p>
    <?php
    $currentWeekday = date("l");

    switch($currentWeekday){
        case "Monday":
            echo "<p class='result-code code'>Still the beginning of the week :___)</p>";
            break;
        case "Tuesday":
            echo "<p class='result-code code'>Still the beginning of the week :___)</p>";
            break;
        case "Wednesday":
            echo "<p class='result-code code'>Mid-week, almost done!</p>";
            break;
        case "Thursday":
            echo "<p class='result-code code'>Mid-week, almost done!</p>";
            break;
        case "Friday":
            echo "<p class='result-code code'>It's Friday, yay!</p>";
            break;
        case "Saturday":
            echo "<p class='result-code code'>Enjoy the weekend!</p>";
            break;
        case "Sunday":
            echo "<p class='result-code code'>Enjoy the weekend!</p>";
            break;
        default:
            echo "Not valid weekday";
    }
    ?>
</div>