<?php
$nombres = array("Ana", "Maria", "Lucia");
$numbers = array(1, 3.2, 5);

#multidimensional array
$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );
  echo "<br><br>"; 
  #obtain the length of an array
  var_dump(count($cars));

  #combination of two arrays

  $result = array_combine($nombres, $numbers);

  print_r($result);
  echo "<br><br>"; 

  #Execute the function that once is given an array return the last element of it
  echo end($nombres);
  echo "<br><br>"; 

#Execute the function that once is given an array add a new element to the array in question

  array_push($nombres, "Olga", "Katy");
  print_r($nombres);
?>
