<?php
$date = new DateTime();
$formatDay = "D";
$formatMonth = "M";
$day = $date -> format($formatDay);
//simple condition
if($day == "Wed"){
    echo nl2br("We are on Monday\n");
}

//simple condition with else
$month = $date -> format($formatMonth);
if($month == "Oct"){
 echo nl2br("We are on October");
}else{
    print_r($date -> format($formatMonth).nl2br("\n"));
}

//double condition
$formatMinute = "i";
$minutes = $date -> format($formatMinute);
if($minutes < 10){
    echo nl2br("the current minute is less than 10\n");
}elseif($minutes >15){
    echo nl2br("the current minute is more than 15\n");
}else{
    echo nl2br("does not meet any conditions\n");
}

//switch
switch($day){
    case "Mon":
        echo nl2br("We are on Monday");
        break;
    case "Tue":
        echo nl2br("We are on Tuesday");
        break;
    case "Wed":
        echo nl2br("We are on Wednesday");
        break;
    case "Thu":
        echo nl2br("We are on Thursday");
        break;
    case "Fri":
        echo nl2br("We are on Friday");
        break;
    case "Sat":
        echo nl2br("We are on Saturday");
        break;
    case "Sun":
        echo nl2br("We are on Sunday");
        break;
}
?>