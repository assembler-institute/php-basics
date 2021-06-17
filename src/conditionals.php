<code>
    <div style="margin-bottom:15px">
        <b>Create a simple condition that evaluates whether the current day is Monday</b><br />
        <pre>
$day = date('l');
if ($day == 'Monday') {
    echo "We are on Monday";
}  
        </pre>
        <u>Result:</u>
        <i>
        <?php 
$day = date('l');
if ($day == 'Monday') {
    echo "We are on Monday";
}
        ?>        
        </i>
    </div>

    <div style="margin-bottom:15px">
        <b>Create a simple condition that evaluates whether the current month is October</b><br />
        <pre>
$month = date('F');
if ($month == 'October') {
    echo "We are in October";
}   else {
    echo $month;
}
        </pre>
        <u>Result:</u>
        <i>
        <?php
$month = date('F');
if ($month == 'October') {
    echo "We are in October";
}   else {
    echo $month;
}
        ?>        
        </i>
    </div>


    <div style="margin-bottom:15px">
        <b>Create a double condition that evaluates:</br> · If the current minute is less than 10. Displays a message of type "the current minute is less than 10",</br> · If the current minute is greater than 15, displays a message of the type "the current minute is more than 15".</br> · If you do not meet any of the two conditions above: Displays a message of the type "does not meet any conditions”
</b><br />
        <pre>
$minute = date('i');
if ($minute < 10) {
    echo "the current minute is less than 10";
} elseif ($minute > 15) {
    echo "the current minute is more than 15";
} else {
    echo "does not meet any conditions";
}
        </pre>
        <u>Result:</u>
        <i>
        <?php 
$minute = date('i');
if ($minute < 10) {
    echo "the current minute is less than 10";
} elseif ($minute > 15) {
    echo "the current minute is more than 15";
} else {
    echo "does not meet any conditions";
}
        ?>        
        </i>
    </div>

    <div style="margin-bottom:15px">
        <b>Create a switch type control structure to display a different message depending on the current day of the week</b><br />
        <pre>
$day = date('l');
switch ($day) {
    case 'Monday':
        echo "$day";
        break;
    case 'Tuesday':
        echo "$day";
        break;
    case 'Wednesday':
        echo "$day";
        break;
    case 'Thursday':
        echo "$day";
        break;
    case 'Friday':
        echo "$day";
        break;
    case 'Saturday':
        echo "$day";
        break;
    case 'Sunday':
        echo "$day";
        break;
}
        </pre>
        <u>Result:</u>
        <i>
        <?php 
$day = date('l');
switch ($day) {
    case 'Monday':
        echo "$day";
        break;
    case 'Tuesday':
        echo "$day";
        break;
    case 'Wednesday':
        echo "$day";
        break;
    case 'Thursday':
        echo "$day";
        break;
    case 'Friday':
        echo "$day";
        break;
    case 'Saturday':
        echo "$day";
        break;
    case 'Sunday':
        echo "$day";
        break;
}
        ?>        
        </i>
    </div>

</code>