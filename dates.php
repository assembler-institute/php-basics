
<!-- Instance the Date Time class and then invoke the format method with the argument “Y-m-d” to show year-month-day -->

</br>
<?php

echo "Today is " . date("Y-m-d") . "<br>";
?>

</br>
<?php
$date = new DateTime();
echo $date->format('Y-m-d');

?>
</br>
<!-- Get the current date in any format -->
</br>
<?php
echo "Current date " .date("l") . "<br>";

?>

<!-- Get the current month in numerical format (1-12) -->
</br>
<?php
echo "Current month "  .date("m") . "<br>";

?>

<!-- Get the current minute with leading zeros (00 - 59) -->

</br>
<?php
echo "Current minute: " . date("i") . "<br>";

?>