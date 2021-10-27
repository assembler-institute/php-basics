<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $d = date("l");
        $m = date("m");
        $min = date("i");
        if($d == "monday"){
            print "We are on Monday" . "<br>";
        }else{
            print "We aren't on Monday" . "<br>";
        }

        if($m == "10"){
            print "We are on October" . "<br>";
        }else{
            print "We are on . $m ." . "<br>";
        }

        if($min < "10"){
            print "The current minute is less than 10" . "<br>";
        }elseif($min > "15"){
            print "The current minute is more than 15" . "<br>";
        }else{
            print "Does not meet any conditions";
        }


        switch ($d) {
            case "Monday":
                print "Monday";
                break;
            case "Tusday":
                print "Tusday";
                break;
            case "Wednesday":
                print "Wednesday";
                break;
            case "Thursday":
                print "Thursday";
                break;
            case "Friday":
                print "Friday";
                break;
            case "Saturday":
                print "Saturday";
                break;
            case "Sunday":
                print "Sunday";
                break;

            default:
            print "error";
        }

    ?>
</body>
</html>