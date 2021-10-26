<?php
  // class DateTime implements DateTimeInterface {
  //   const string DateTimeInterface::RFC3339 = "Y-m-d\TH:i:sP";
  // }
  define("CURRENT_DATE", date('Y-m-d'));
  echo "the current date is ". CURRENT_DATE;

  define("CURRENT_DAY", date('d'));
  echo "<br>";

  echo "the currenty day is ". CURRENT_DAY;
  echo "<br>";

  define("CURRENT_MONTH", date('m'));
  echo "the currenty month is ". CURRENT_MONTH;

  echo "<br>";

  define("CURRENT_MINUTE", date('i'));
  echo "the currenty minute is ". CURRENT_MINUTE

?>


<!-- Get the current date in any format
Instance the Date Time class and then invoke the format method with the argument “Y-m-d” to show year-month-day
Get the current date in any format
Get the current day
Get the current month in numerical format (1-12)
Get the current minute with leading zeros (00 - 59) -->
