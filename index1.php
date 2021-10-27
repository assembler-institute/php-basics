<?php include './incl/header.php'?>
<?php
//variables
$output = 'hello World';
echo $output;
echo "<br>";
//Constants
define('GREETING', 'Hello Everyone', true);
echo GREETING;
echo "<br>";
//array 
//indexed
$people=array("andrecito", "adriancito","marc");
$ids=array(1,2,3);
$cars=['Honda','Toyota','Ford'];
$cars[3]="BMW";
// echo "<br>";
// echo count($cars);
// echo "<br>";
// print_r($cars);
// echo "<br>";
// var_dump($cars);
// echo "<br>";
// echo $people[0];
// echo "<br>";
// echo $ids;
// echo "<br>";

//Associative arrays

$people=array("Brad"=>35,"Jose"=>32);
echo $people ["Brad"];
echo "<br>";

$cars=array (
    array("honda",20,10),
    array("ford",30,20)
);
echo $cars[1][2];

echo "<br>";

//Loops
// for ($i=0; $i<10;$i++){
//     echo $i;
//     echo "<br>";
// }
// $i=0;
// while($i<10){
//     echo $i;
//     echo "<br>";
//     $i++;
// };
// foreach($people as $person){
// echo $person;
// echo "<br>";
// }
//Functions
function simpleFunction(){
    echo "Hello World<br>";
}
simpleFunction();
//with param
function sayHello($name){
    echo "Hello $name <br>";
    }
    sayHello("andrecito");

$num=5;
// if($num===5){
//     echo "5 passed";
// }elseif($num===6){
//     echo "6 passed";
// }else{
//     echo "did not pass";
// }

if($num>4){
    if($num<10){
        echo "$num passed<br>";
    }
}

if($num>4 || $num<10){
    echo "$num passed2<br>";
}
?>
<?php include './incl/footer.php'?>