<?php

//Define a simple array composed of text strings
$cars = [ "Ford", "Tesla", "Toyota", "Kia"];

//Define a simple array consisting of whole numbers and decimal numbers
$ranking = array(1, 2.5, 3, 4.6, 5);

//Define a multidimensional array
$motorcycles = array (
    array("Yamaha ",22,18),
    array("Benelli",15,13),
    array("Kawasaki",5,2),
    array("KTM",17,15)
  );
  echo $motorcycles[0][0]."<br>";

  //Execute the function that allows to obtain the length of an array
echo (count( $motorcycles));

//Execute the function that allows to obtain the combination of two arrays
$colors1 = array('green', 'red', ' yellow');
$colors = array('green', 'red', ' yellow');
$c = array_combine($colors1, $colors);


//Execute the function that once is given an array return the last element of it
echo end($colors1); 

//Execute the function that once is given an array add a new element to the array in question
$phones = array("apple", "samsung");
array_push($phones, "huawei", "xiaomi");
print_r($phones);


?>