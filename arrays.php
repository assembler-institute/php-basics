<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arrays</title>
</head>
<body>
  <?php
// "NOTE:To print properly an array, you either loop through it and echo each element, or use print_r";

//"Simple array composed of text strings";
$arr = ["Orange", "Banana", "Limo", "Grapes"];
print_r($arr);

//"Simple array composed of numbers and decimals";
$num = array(2,5,6,4.3,7.20,2.33);
print_r($num);

//"Multidimensional array";
$groups = [
["Walber", "Ricardo", "Marcel", "Julio"],
["Melo","Gamea", "Eduardo", "Prestes"],
];
print_r($groups);

//"Obtain the length of an array";
function getArrayLength(&$arr){
echo count($arr);
}
echo getArrayLength($num);

//"Creates an array by using one array for keys and another for its values";
$comineArray = array_combine($groups[0],$groups[1]);
print_r($comineArray); 

// "Return the last element of an array."
function getLastArrElement(&$array){
$lastElement = (end($array));
echo "Last element: " .$lastElement;
}
getLastArrElement($groups[0]);


// "Add a new element to the array.";
function addArrElement(&$array){
array_push($array, "Mike", "Kate");
print_r($array);
}
addArrElement($groups[0]);
//
  ?>
</body>
</html>