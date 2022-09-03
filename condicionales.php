<?php
print '--------------------< Current Day >--------------------<br>';

$currentDay = new DateTime();
// echo $currentDay->format('Y/m/d H:i:sA l');


if($currentDay ->format('l') === 'Monday'){
    echo 'We are on Monday';
} else{
     echo "No, today ". $currentDay->format('l');
}

echo '<br>';
print '<br>--------------------< Current Month >--------------------<br>';

if($currentDay ->format('M') === 'October'){
    echo 'We are on October';
} else{
     echo "No, We are on ". $currentDay->format('M');;
}

echo '<br>';
print '<br>--------------------< Current Month >--------------------<br>';

// $currentDay->setTime(18,12);

if($currentDay->format('i')<10){
    echo 'The current minutes is less than 10';
} else if($currentDay->format('i')>15){
     echo 'The current minutes is more than 15';
} else {
     echo 'Does not meet any conditions';
}

// echo $currentDay->format('l');

// $currentDay->setTime(18,12);
echo '<br>';
print '<br>--------------------< Switch >--------------------<br>';
switch($currentDay->format('l')){
    case 'Monday':{
        echo 'Not a weekend day, must study and/or work!';
        break;
    }
    case 'Tuesday':{
        echo 'Not a weekend day, must study and/or work!';
        break;
    }
    case 'Wednesday':{
        echo 'Not a weekend day, must study and/or work!';
        break;
    }
    case 'Thusday':{
        echo 'Not a weekend day, must study and/or work!';
        break;
    }
    case 'Friday':{
        echo 'Not a weekend day, we are close to it!';
        break;
    }
    case 'Saturday':{
        echo 'Its weekend, have fun!';
        break;
    }
    case 'Sunday':{
        echo 'Its weekend, have fun!';
        break;
    }
}
?>