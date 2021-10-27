<?php include './incl/header.php'?>
<?php
echo "<h2>Conditional</h2>";
$day=date("D");
echo date("D");
if($day=="Mon"){
echo "We are on Monday";
}else{
    echo "other day <br/>";
}

$Month=date("M");
if($Month=="Oct"){
echo "We are in October<br/>";
}else{
    echo "Current month is: $Month";
}

$Min=date("i");

if($Min<10){
    echo "the current minute is less than 10 <br/>";
}elseif ($Min>15) {
    echo "the current minute is more than 15 <br/>";
}
else {
   echo "does not meet any conditions <br/>";
}


switch ($day) {
    case 'Mon':
        echo  "it's Monday";
        break; 
        
    case 'Tue':
        echo  "it's Tuesday";
        break; 
    case 'Wen':
        echo  "it's Wendesday";
        break;
    case 'Thu':
        echo  "it's Thurday";
        break;
    case 'Fri':
        echo  "it's Friday";
        break;
    case 'Sat':
        echo  "it's Saturday";
        break;
    default:
    echo "it's Sunday";
}


?>
<?php include './incl/footer.php'?>