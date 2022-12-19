<?php

// Get date
$actualDate = new DateTime();

// Show msg if its monday
if($actualDate->format('D') === 'Mon'){
print "We are on Monday";
}

echo '<br><br>';

// Show msg if its october
if($actualDate->format('M') === 'Oct'){
    print "We are in October";
}else{
    print 'The actual month is '.$actualDate->format('M');
}

echo '<br><br>';

// Show msg if before 10 minutes and if after 15 minutes
if($actualDate->format('i') < 10){
    print "the current minute is less than 10";
}else if($actualDate->format('i') > 15){
    print "the current minute is more than 15";
}else{
    print "does not meet any conditions";
}

echo '<br><br>';

// Show the actual day with a msg
switch($actualDate->format('D')){
    case 'Mon':
        print 'Today is Monday';
        break;
    case 'Tue':
        print 'Today is Tuesday';
        break;
    case 'Wen':
        print 'Today is Wednesday';
        break;
    case 'Thu':
        print 'Today is Thursday';
        break;
    case 'Fri':
        print 'Today is Friday';
        break;
    case 'Sat':
        print 'Today is Saturday';
        break;
    case 'Sun':
        print 'Today is Sunday';
        break;
}