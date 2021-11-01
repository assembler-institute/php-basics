<?php
  for ($i=0; $i<5;$i++){    
      echo "$i";
  }
 echo "<br>";
  $array = [1,2,3,4,5];


  foreach($array as $key=>$item){
      echo "{$key}=>{$item} .<br/>";
  }
  echo "<br>";
  $i=0;
  while ($i<5){
      echo $i;
      $i++;
  }
  echo "<br>";
  do {
      echo $i;
      $i++;
  } while ($i<10);
  echo "<br>";
?>