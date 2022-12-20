<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP - Conditionals</title>
</head>

<body>
  <?php
  require './globals.php';

  echo '<h2>conditionals.php</h2>';

  hr();

  // Simple condition
  echo '<h4>If it`s Monday show message</h4>';
  echo '
<pre>
if (date("l", mktime(0, 0, 0, 7, 1, 2000)) == "Monday") {
  echo "We are on Monday";
} else {
  echo "No message";
}
</pre> ==> ';
  if (date("l", mktime(0, 0, 0, 7, 1, 2000)) == 'Monday') {
    echo 'We are on Monday';
  } else {
    echo 'No message';
  }

  hr();

  // Simple condition
  echo '<h4>If it`s October show message else show month</h4>';
  echo '
<pre>
if (date("F") == "October") {
  echo "We are in October";
} else {
  echo date("F");
}
</pre> ==> ';
  if (date("F") == 'October') {
    echo 'We are in October';
  } else {
    echo date('F');
  }

  hr();

  // Double condition
  echo '<h4>Double condition</h4>';
  echo '
<pre>
if (date("i") < 10) {
  echo "the current minute is less than 10";
} elseif (date("i") > 15) {
  echo "the current minute is more than 15";
} else {
  echo "does not meet any conditions";
}
</pre> ==> ';
  if (date("i") < 10) {
    echo 'the current minute is less than 10';
  } elseif (date("i") > 15) {
    echo 'the current minute is more than 15';
  } else {
    echo 'does not meet any conditions';
  }

  hr();

  // Switch
  echo '<h4>Switch</h4>';
  echo '
<pre>
switch (date("l")) {
  case "Monday":
    echo "Today is Monday";
    break;
  case "Tuesday":
    echo "Today is Tuesday";
    break;
  case "Wednesday":
    echo "Today is Wednesday";
    break;
  case "Thursday":
    echo "Today is Thursday";
    break;
  case "Friday":
    echo "Today is Friday";
    break;
  case "Saturday":
    echo "Today is Saturday";
    break;
  case "Sunday":
    echo "Today is Sunday";
    break;
}
</pre> ==> ';
  switch (date('l')) {
    case 'Monday':
      echo 'Today is Monday';
      break;
    case 'Tuesday':
      echo 'Today is Tuesday';
      break;
    case 'Wednesday':
      echo 'Today is Wednesday';
      break;
    case 'Thursday':
      echo 'Today is Thursday';
      break;
    case 'Friday':
      echo 'Today is Friday';
      break;
    case 'Saturday':
      echo 'Today is Saturday';
      break;
    case 'Sunday':
      echo 'Today is Sunday';
      break;
  }

  ?>
</body>

</html>