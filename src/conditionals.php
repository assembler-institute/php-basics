<div>
    <h3>Using Conditionals</h3>
    <div class="currentWeekday">
        <h4>current weekday</h4>
        <h5>
            <?php
            // getting the current weekday
            echo '$today = new DateTime();<br>
            if ($today->format("l") === "Monday") {<br>
                echo "We are on ", $today->format("l"), ".";<br>
            } else {<br>
                echo "We are not on Monday.<br>It is ", $today->format("l"), " today.";<br>
            };<p>output:</p>';
            $today = new DateTime();
            if ($today->format("l") === "Monday") {
                echo "We are on ", $today->format("l"), ".";
            } else {
                echo "We are not on Monday.<br>It is ", $today->format("l"), " today.";
            };
            ?>
        </h5>
    </div>
    <div class="currentMonthName">
        <h4>current month name</h4>
        <h5>
            <?php
            // getting the current month name
            echo '$currentMonth = new DateTime();<br>
            $currentMonthName = $currentMonth->format("F");<br>
            if ($currentMonthName === "October") {<br>
                echo "We are in ", $currentMonthName, ".";<br>
            } else {<br>
                echo "We are not in October.<br>It is ", $currentMonthName, ".";<br>
            }; <p>output:</p>';
            $currentMonth = new DateTime();
            $currentMonthName = $currentMonth->format("F");
            if ($currentMonthName === "October") {
                echo "We are in ", $currentMonthName, ".";
            } else {
                echo "We are not in October.<br>It is ", $currentMonthName, ".";
            };
            ?>
        </h5>
    </div>
    <div class="doubleCondition">
        <h4>double condition ( current minute )</h4>
        <h5>
            <?php
            // getting the current minute and set a double condition
            echo ' $currentDate = new DateTime();<br>
            $currentMinutes = $currentDate->format("i");<br>
            if ($currentMinutes < 10) {<br>
                echo "The current minute is the current minute is less than 10.";<br>
            } elseif ($currentMinutes > 15) {<br>
                echo "The current minute is more than 15.";<br>
            } else {<br>
                echo "It does not meet any conditions.";<br>
            }; <p>output:</p>';
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
            echo '$today = new DateTime();<br>
            $currentDay = $today->format("l");<br>
            switch ($currentDay) {<br>
                case "Monday":<br>
                    echo "It is Monday! What did you do last weekend?";<br>
                    break;<br>
                case "Tuesday":<br>
                    echo "It is Tuesday! ...still the second day of the week";<br>
                    break;<br>
                case "Wednesday":<br>
                    echo "It is Wednesday! Tomorrow is Thursday.......not Friday..";<br>
                    break;<br>
                case "Thursday":<br>
                    echo "It is Thursday! Tomorrow is Friday!!!!!!";<br>
                    break;<br>
                case "Friday":<br>
                    echo "Finally! Friday!!!!!!!";<br>
                    break;<br>
                case "Saturday":<br>
                    echo "It is Saturday. Have a nice weekend!!!";<br>
                    break;<br>
                case "Sunday":<br>
                    echo "It is Sunday. I do not want Monday to come...";<br>
                    break;<br>
                default:<br>
                    echo "8th day????";<br>
            }; <p>output:</p>';
            $today = new DateTime();
            $currentDay = $today->format("l");
            switch ($currentDay) {
                case "Monday":
                    echo "It is Monday! What did you do last weekend?";
                    break;
                case "Tuesday":
                    echo "It is Tuesday! ...still the second day of the week";
                    break;
                case "Wednesday":
                    echo "It is Wednesday! Tomorrow is Thursday.......not Friday..";
                    break;
                case "Thursday":
                    echo "It is Thursday! Tomorrow is Friday!!!!!!";
                    break;
                case "Friday":
                    echo "Finally! Friday!!!!!!!";
                    break;
                case "Saturday":
                    echo "It is Saturday. Have a nice weekend!!!";
                    break;
                case "Sunday":
                    echo "It is Sunday. I do not want Monday to come...";
                    break;
                default:
                    echo "8th day????";
            }

            ?>
        </h5>
    </div>
</div>