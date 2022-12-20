<?php
echo ("<h1>Conditionals</h1>");

# If current day is Monday

echo ("Current day condition: ");
if(date("D") === "Mon") {
    echo ("We are on Monday");
}else{
    echo ("It is not Monday");
}

echo ("<hr>");

# If current month is October

echo ("Current month condition: ");
if(date("M") === "Oct") {
    echo ("We are on October");

}else{
    echo date("M");
}

echo ("<hr>");


# Current minute condition

echo ("Current Minute condition: ");

if (date("i") < 10) {
    echo ("The current minute is less than 10");
}else if (date("i") > 15) {
    echo ("The current minute is more than 15");
}else {
    echo ("Does not meet any conditions");
} 

echo ("<hr>");


# Day of the week


echo ("Day of the week with switch: ");



switch (date("w")) {
    case 0:
        echo ("Today it is Sunday");
        break;
    case 1:
        echo ("Today it is Monday");
        break;
    case 2:
        echo ("Today it is Tuesday");
        break;
    case 3:
        echo ("Today it is Wednesday");
        break;
    case 4:
        echo ("Today it is Thursday");
        break;
    case 5:
        echo ("Today it is Friday");
        break;
    case 6:
        echo ("Today it is Saturday");
        break;
    
}
?>