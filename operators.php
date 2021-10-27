
<?php include './incl/header.php'?><?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

echo "<h1>Operators</h1>";
var_dump(1==29);
echo "<hr/>";

$a=1;
$b=2;

echo $a+$b."<br/>";
echo $a*$b."<br/>";
echo $a-$b."<br/>";
echo $a/$b."<br/>";
echo $a%$b."<br/>";

if($a==$b){
    echo "equals numbers";
} else {
    echo "diferent numbers";
}
echo "<br/>";
if($a!=$b){
    echo "diferent numbers";
} else {
    echo "equals numbers" ;
}
echo "<br/>";
if($a<$b){
    echo "a is bigger than b";
}else {
    echo "b is bigger than a";
};
echo "<br/>";
if($a > $b || 1){
    echo " true";
}else {
    echo "false";
};

if($a!=$b)
{echo "Hello World";
}

?>
<?php include './incl/footer.php'?>