<?php
  $simpleArray = ["a","b","c"];
  print_r($simpleArray);
  echo "<br>";
  $numericalArray = [1,2,3,4.3,5.2];
  print_r($numericalArray);
  echo "<br>";
  $multidimensionalArray=[[1,2,3],["a","b","c"]];
  print_r($multidimensionalArray);
  echo  "<br>";
  $count= count($simpleArray);
  echo $count;
  echo "<br>";
  print_r(array_merge($simpleArray,$numericalArray));
  echo "<br>";
  echo end($simpleArray);
  echo "<br>";
  print_r(array_push($simpleArray,"d"));
?>