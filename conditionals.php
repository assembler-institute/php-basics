<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conditionals</title>
</head>
<body>
  <?php
//Evaluates whether the current day is Monday.
$date = date("l");
if($date == "Monday") {
  echo "We are on $date.";
} else {
  echo "Today is $date.";
}

//Evaluates whether the current month is October
$month = date("M");
if($month == "October") {
  echo "We are on $october.";
} else {
  echo "We are on $month.";
}

//Create a double condition that evaluates:
$time = date('i');
if ($time < 10) {
echo "the current minute is less than 10";
} else if ($time > 15) {
  echo "the current minute is more than 15";
} else {
  echo "does not meet any conditions";
}

//switch type control structure
switch($date) {
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
?>
</body>
</html>