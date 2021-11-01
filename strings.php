<?php
  echo "text";
  echo"<br>";
  $a="sergi";
  echo "My name is ${a}";
  echo"<br>";
  echo "My name is ". $a;
  echo"<br>";
  echo str_replace("Hello", "hello", "This is the word hello");
  //without taking in account lower/upper
  echo"<br>";
  echo str_repeat("text",5);
  echo"<br>";
  echo strlen("text");
  echo"<br>";
  echo strtoupper("hello it is me");
  echo"<br>";
  echo strtolower("THIS IS GONNA BE LOWERCASE");
  echo"<br>";
  echo substr('abcdef', 1, 3);
?>