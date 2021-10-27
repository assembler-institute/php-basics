<?php include './incl/header.php'?>
<?php
echo "<h2>Math</h2>";
//echo abs(-4.2); // 4.2 (double/float);
function absNumber($a){
  if($a<0){
    echo -$a."<br>";
  }else{
    echo $a."<br>";
  }
}
absNumber(-100);

echo intval((max(array(28, 36, 87.9, 12))). "<br>");
echo "<br>";
function lowerNumber($a){
echo $a."<br>";
}
lowerNumber($a=min(array(28, 36, 87.9, 12)));

function randomNumber(){
  echo rand(1,50)."<br>";
  }
randomNumber()


?>