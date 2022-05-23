<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conditionals</title>
</head>
<body>

  <h1>Conditionals</h1>

  <a href="/Assembler/Month6/php_basics/index.html">Home</a>
  <br/>
  <?php

$weekday = date("l");
$month = date("F");

if ($weekday=="Monday") {
  echo "Today is Monday";
};

echo "<br/>";

if ($month=="October") {
  echo "We are on October";
}else {
  echo "We are on $month";
}

echo "<br/>";

$currentMinute = date("i");

if ($currentMinute<10) {
  echo "the current minute is less than 10";
}elseif ($currentMinute>15) {
  echo "the current minute is greater than 10";
}
else {
  echo "the current minute does not meet any condition";
};

echo "<br/>";

switch ($weekday) {
  case 'Monday':
    echo "Today is Monday";
    break;
    case 'Tuesday':
      echo "Today is Tuesday";
      break;
      case 'Wednesday':
        echo "Today is Wednesday";
        break;
        case 'Thursday':
          echo "Today is Thursday";
          break;
          case 'Friday':
            echo "Today is Friday";
            break;
            case 'Saturday':
              echo "Today is Saturday";
              break;
              case 'Sunday':
                echo "Today is Sunday";
                break;
                default:
                echo "The day of today is out of our planet";
                break;
              };
              ?>
</body>
</html>