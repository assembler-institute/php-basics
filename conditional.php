<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditionals</title>
</head>

<body>
    <h2>Its Monday?</h2>
    <?php
    $date = new DateTime();
    $weekDay = $date->format('D');
    $currentMonth = $date->format('M');
    $currentMonthNumber = $date->format('n');
    $currentMinute = $date->format('i');
    $product = "🍎";


    if ($weekDay == 'Mon') {
        print "<h3>We are on Monday!! 🥳</h3>";
    } else {
        print "<h3>Its not Monday!! 😢</h3>";
    }

    print "<hr>";
    print "<h2>We are in October?</h2>";
    if ($currentMonth == 'Oct') {
        print "<h3>We are in October!! 🥳</h3>";
    } else {
        print "<h3>We are in $currentMonth!! 😢</h3>";
    }

    print "<hr>";
    print "<h2>The current minute is less than 10 or more than 15</h2>";

    if ($currentMinute < 10) {
        print "<h3>The current minute is less than 10</h3>";
    } else if ($currentMinute > 15) {
        print "<h3>The current minute is more than 15</h3>";
    } else {
        print "<h3>Does not meet any conditions</h3>";
    }

    print "<hr>";
    print "<h2>What product is it?</h2>";

    switch ($product) {
        case "🍎":
            print "its a apple";
            break;
        case "🥝":
            print "its a kiwi";
            break;
        default:
            print "is a product";
    }


    ?>
</body>

</html>