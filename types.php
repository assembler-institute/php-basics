<?php
$x = (object) [
  'a' => 'test',
  'b' => 'test2',
  'c' => 'test3'
];
  $boolean = TRUE;
  $integer=1;
  $float=0.1;
  $string="hello";
  $array=[1,2,3,4,5];
  $object= $x;
  $null=NULL;

  var_dump($boolean);
  echo"<br>";
  echo $integer;
  echo"<br>";
  echo $float;
  echo"<br>";
  echo $string;
  echo"<br>";
  print_r($array);
  echo"<br>";
  print_r($object);
  echo"<br>";
  var_dump($null);
?>