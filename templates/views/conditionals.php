
    <!-- Only in the case that the condition is met -->
    <article class="article">
    <h3>1. Only in the case that the condition of Monday is met  </h3>
    <p>Create a simple condition that evaluates whether the current day is Monday. Only in the case that the condition is met, it shows a message of “We are on Monday”.</p>
    <h5>example :</h5>
<pre>
$date = new DateTime();
$day = $date->format('l');
if ($day === "Monday") {
    echo "We are on Monday";
} else {
    echo "We are on ".$day;
}
</pre>
    <h5>result :</h5>
    <?php
        $date = new DateTime();
        $day = $date->format('l');
        if ($day === "Monday") {
            echo "We are on Monday";
        } else {
            echo "We are on ".$day;
        }
    ?>
    </article>

    <!-- get the current month in any format -->
    <article class="article">
        <h3>2. Only in the case that the condition of October is met</h3>
        <p>Create a simple condition that evaluates whether the current month is October. If the condition is met, it shows a message of the type "We are in October". </p>
        <h5>example :</h5>
<pre>
$date = new DateTime();
$month = $date->format('F');
if ($month === "October") {
    echo "We are on October";
} else {
    echo "We are on ".$month;
}
</pre>
        <h5>result :</h5>
        <?php
            $date = new DateTime();
            $month = $date->format('F');
            if ($month === "October") {
                echo "We are on October";
            } else {
                echo "We are on ".$month;
            }
        ?>
    </article>

    <!-- a double condition  -->
    <article class="article">
        <h3>3. Double condition </h3>
        <p>If the current minute is less than 10. Displays a message of type "the current minute is less than 10", if the current minute is greater than 15, displays a message of the type "the current minute is more than 15". If you do not meet any of the two conditions above: Displays a message of the type "does not meet any conditions”.</p>
        <h5>example :</h5>
<pre>
$d = new DateTime();
$minutes = $d->format('i');
if ($minutes < 10) {
    echo "the current minute is less than 10";
} else if ($minutes > 15) {
    echo "the current minute is more than 10";
} else {
    echo "does not meet any conditions";
}
</pre>
            <h5>result :</h5>
        <?php
            $d = new DateTime();
            $minutes = $d->format('i');
            // echo $minutes;
            if ($minutes < 10) {
                echo "the current minute is less than 10";
            } else if ($minutes > 15) {
                echo "the current minute is more than 10";
            } else {
                echo "does not meet any conditions";
            }
        ?>
    </article>

    <!-- a switch type control structure   -->
    <article class="article">
        <h3>4. Switch type control structure </h3>
        <p>create a switch type control structure to display a different message depending on the current day of the week. You can write any type of message, because the important thing is that you understand how it works and in what cases you can use it.</p>
        <h5>example :</h5>
<pre>
$date = new DateTime();
$day = $date->format('N');
switch ($day) {
    case 1:
        echo "We are on Monday";
        break;
    case 2:
        echo "We are on Tuesday";
        break;
    case 3:
        echo "We are on Wednesday";
        break;
    case 4:
        echo "We are on Thursday";
        break;
    case 5:
        echo "We are on Friday";
        break;
    case 6:
        echo "We are on Saturday";
        break;
    case 0:
        echo "We are on Sunday";
        break;
    }
</pre>
        <h5>result :</h5>
        <?php
            $date = new DateTime();
            $day = $date->format('N');
            switch ($day) {
                case 1:
                    echo "We are on Monday";
                    break;
                case 2:
                    echo "We are on Tuesday";
                    break;
                case 3:
                    echo "We are on Wednesday";
                case 4:
                    echo "We are on Thursday";
                    break;
                case 5:
                    echo "We are on Friday";
                    break;
                case 6:
                    echo "We are on Saturday";
                case 0:
                    echo "We are on Sunday";
                    break;
            }
        ?>
    </article>
