<div>
<h3>Using Dates : Datetime</h3>
<div class="dateTime">
<h4>Y-m-d</h4>
<h5>
  <?php
$currentDate = new DateTime("yesterday");
echo "Yesterday was ", $currentDate->format("Y-m-d"), ".";
?>
</h5>
</div>
 <div class="currentDate">
<h4>current date with "jS F Y" format</h4>
<h5>
  <?php
$currentDate = new DateTime();
echo "Today is ", $currentDate->format("jS F Y"), ".";
?>
</h5>
</div>
 <div class="currentDay">
<h4>current day</h4>
<h5>
  <?php
$currentDate = new DateTime();
echo "Today is ", $currentDate->format("jS"), ".";
?>
</h5>
</div>
 <div class="currentMonth">
<h4>current month ( numerical format )</h4>
<h5>
  <?php
$currentDate = new DateTime();
echo "The current month is ", $currentDate->format("n (F)"), ".";
?>
</h5>
</div>
<div class="currentMinutes">
<h4>current month ( numerical format )</h4>
<h5>
  <?php
$currentDate = new DateTime();
echo "The current minute is ", $currentDate->format("i"), ".";
?>
</h5>
</div>
<div class="myBirthday">
<h4>birthday and age</h4>
<h5>
  <?php
$currentDate = new DateTime();
$birthday = new DateTime("1986-08-24");
$age = $birthday->diff($currentDate);
echo "I am ", $age->y, " years old.";
?>
</h5>
</div>
</div>