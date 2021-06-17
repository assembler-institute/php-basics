<div>
    <h3>Using Conditionals</h3>
    <div class="currentWeekday">
    <h4>current weekday</h4>
    <h5>
    <?php
    // getting the current weekday
$today = new DateTime();
if ($today->format("l") === "Monday") {
    echo "We are on ", $today->format("l"), ".";
} else {
    echo "We are not on Monday.<br>It is ", $today->format("l"), " today.";
}
;
?>
    </h5>
    </div>
     <div class="currentMonthName">
    <h4>current month name</h4>
    <h5>
    <?php
    // getting the current month name
$currentMonth = new DateTime();
$currentMonthName = $currentMonth->format("F");
if ($currentMonthName === "October") {
    echo "We are in ", $currentMonthName, ".";
} else {
    echo "We are not in October.<br>It is ", $currentMonthName, ".";
}
;
?>
    </h5>
    </div>
    <div class="doubleCondition">
    <h4>double condition ( current minute )</h4>
    <h5>
     <?php
     // getting the current minute and set a double condition
$currentDate = new DateTime();
$currentMinutes = $currentDate->format("i");
if ($currentMinutes < 10) {
    echo "The current minute is the current minute is less than 10.";
} elseif ($currentMinutes > 15) {
    echo "The current minute is more than 15.";
} else {
    echo "It does not meet any conditions.";
}
?>    
    </h5>
    </div>
    <div class="currentDaysOfWeek">
    <h4>the current day of the week with switch</h4>
    <h5>
    <?php
    // using switch to display different messages depending on the current day
$today = new DateTime();
$currentDay = $today->format("l");
switch($currentDay) {
    case "Monday" :
        echo "It is Monday! What did you do last weekend?";
    break;
    case "Tuesday" : 
        echo "It is Tuesday! ...still the second day of the week";
    break;
    case "Wednesday" :
        echo "It is Wednesday! Tomorrow is Thursday.......not Friday..";
    break;
    case "Thursday" :
        echo "It is Thursday! Tomorrow is Friday!!!!!!";
    break;
    case "Friday" :
        echo "Finally! Friday!!!!!!!";
    break;  
    case "Saturday" :
        echo "It is Saturday. Have a nice weekend!!!";
    break;
    case "Sunday" :
        echo "It is Sunday. I don't want Monday to come...";
    break;
    default :
    echo "8th day????";      
}

?>
    </h5>
    </div>
</div>