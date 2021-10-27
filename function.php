<?php include './incl/header.php'?>
<?php
echo "<h2>Functions</h2>";
function sumNum($a,$b){
    echo ($a+$b);
}
sumNum(1,2);
echo "<br>";
function mulNum($a,$b){
    echo ($a*$b);
}
mulNum(3,2);
echo "<br>";
function divNum($a,$b){
    echo ($a/$b);
}
divNum(3,2);
echo "<br>";

$operator_function = function($a,$b,$c){ 
    $c = strval($c);
    switch($c){
        case "+":
            return "You selected a sum. {$a}+{$b} = " . $a+$b;
            break;
        case "*":
          return "You selected a multiplication. {$a}*{$b} = " .$a*$b;
            break;
        case "/":
          return "You selected a divison {$a}/{$b} = " . $a/$b;
            break;        
    };
  };

?>
<?php include './incl/footer.php'?>