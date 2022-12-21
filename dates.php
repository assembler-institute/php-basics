<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP - Dates</title>
</head>

<body>
  <?php
  require './globals.php';

  echo '<h2>PHP - Dates</h2>';

  hr();

  // Instance the Date time class and invoke format
  echo '<h4>Instance the Date time class and invoke format</h4>';
  echo '
<pre>
$date = new DateTime();
echo $date->format("Y-m-d");
</pre> ==> ';
  $date = new DateTime();
  echo $date->format('Y-m-d');

  hr();

  // Get current day in any format
  echo '<h4>Get current day in any format</h4>';
  echo '
<pre>
echo date("l jS \of F Y h:i:s A");
</pre> ==> ';
  echo date('l jS \of F Y h:i:s A');

  hr();

  // Get current day
  echo '<h4>Get current day</h4>';
  echo '
<pre>
echo date("l jS \of F");
</pre> ==> ';
  echo date('l jS \of F');

  hr();

  // Get current numerical month
  echo '<h4>Get current numerical month</h4>';
  echo '
<pre>
echo date("m");
</pre> ==> ';
  echo date('m');

  hr();

  // Get the current minute with leading zeros
  echo '<h4>Get the current minute with leading zeros</h4>';
  echo '
<pre>
echo date("i");
</pre> ==> ';
  echo date('i');

  ?>
</body>

</html>