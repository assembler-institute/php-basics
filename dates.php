<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dates</title>
</head>
<body>
  <?php
$dateTime = new \DateTime();
echo print_r($dateTime);
echo "<br>";
// “Y-m-d” to show year-month-day
echo $dateTime->format("Y-m-d");
echo "<br>";
// Get the current date in any format
echo date('d');
echo "<br>";
// Get the current day
echo date('l');
echo "<br>";
// Get the current month in numerical format (1-12)
echo date('m');
// Get the current minute with leading zeros (00 - 59)
echo $dateTime->format("i");
  ?>
</body>
</html>