<?php
  $number=-1;
  $absolute = abs (  $number );
  echo $absolute;
  echo "<br>";
  $rounded = round(152.555, 2);

  echo "<br>";
  $highest = function ($a,$b){
      return max($a,$b);
  };
  echo $highest(2,3);
  echo "<br>";
  $lowest = function ($a,$b){
    return min($a,$b);
};
  echo $lowest(10,15);
  
  echo "<br>";
  $random = function ($a, $b){
      return random_int($a,$b);
  };
  echo $random (10,100);
  echo "<br>";
?>