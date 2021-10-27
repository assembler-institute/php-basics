<code>
<div style="padding-left: 1rem">
    
    <div style="padding-bottom: 3rem">
        <b>5.1 Create a simple condition that evaluates whether the current day is Monday.</b>
        <pre>
<em><u>code:</u></em>
            
            <span style="color: blue;">
$isMonday = date('l');
if($isMonday ==='Monday'){
echo "Yes, it is Monday"
}else{
    echo "Today is not Monday";
}
            </span>
        </pre>
        <em><u>Result:</u></em>
        <i>
            <?php
$isMonday = date('l');
if($isMonday ==='Monday'){
    echo "Yes, it is Monday";
}else{
    echo "Today is not Monday";
}
?>
    </i>
</div>

    <div style="padding-bottom: 3rem">
        <b>5.2 Create a simple condition that evaluates whether the current month is October.</b>
        <pre>
<em><u>code:</u></em>
            
            <span style="color: blue;">
$isOctober = date('m');
if($isOctober ==='October'){
echo "Damn! the summer is gone"
}else{
    echo "We are not in not October";
}
            </span>
        </pre>
        <em><u>Result:</u></em>
        <i>
            <?php
$isOctober = date('F');
if($isOctober ==='October'){
    echo "Damn! the summer is gone";
}else{
    echo "We are not in not October";
}
?>
    </i>
</div>

    <div style="padding-bottom: 3rem">
        <b>5.3 Create a double condition that evaluates:</b></br> · If the current minute is less than 10. Displays a message of type "the current minute is less than 10",</br> · If the current minute is greater than 15, displays a message of the type "the current minute is more than 15".</br> · If you do not meet any of the two conditions above: Displays a message of the type "does not meet any conditions”
        <pre>
<em><u>code:</u></em>
            
            <span style="color: blue;">
$checkMinute = date('i');
if ($checkMinute < 10) {
    echo "the current minute is less than 10";
} elseif ($checkMinute > 15) {
    echo "the current minute is more than 15";
} else {
    echo "does not meet any conditions";
}
            </span>
        </pre>
<em><u>Result:</u></em>
        <i>
        <?php
            $checkMinute = date('i');
            if ($checkMinute < 10) {
                echo "the current minute is less than 10";
            } elseif ($checkMinute > 15) {
                echo "the current minute is more than 15";
            } else {
                echo "does not meet any conditions";
            }
        ?>
        </i>
</div>

<div style="padding-bottom: 2rem">
        <b>5.4 Create a switch type control structure to display a different message depending on the current day of the week.</b>

        <pre>
<em><u>code:</u></em>
            
            <span style="color: blue;">


            </span>
        </pre>
<em><u>Result:</u></em>
        <i>
        <?php


        ?>
        </i>
</div>

</div>
</code>