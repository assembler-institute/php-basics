<?php include './incl/header.php'?>
<?php
 $names=["andres","Marc", "Pere", "Alberto","Adriancito"];
for ($i=0; $i<count($names);$i++){
    echo "Name: $i is  $names[$i].<br>";
}

$arr=array(1,2,3,4,5);
foreach ($arr as $key => $value) {
    // $arr[3] will be updated with each value from $arr...
    echo "{$key} => {$value} .<br>";
    print_r($arr);
}

$x = 1;
while($x <10){
    echo "<p> the number is: $x  </p>";
    $x++;
}
$X= 1;
do{
    echo "the number is $x <br>";
    $x++;
}
while ($x<=5);

?>