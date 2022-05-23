<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Maths</title>
</head>
<body>
  <?php
//absolute() => Give absolute integer
  function absolute(){
    $absolute = abs(2 * 1.8);
    echo "The value $absolute is absolute";
  }
absolute();
echo "<br>";

//rounded() => Round number to his higher int value
function rounded(){
  $rounded = ceil(2 * 1.8);//3.6 will be 4
  echo "The value $rounded was rounded";
}
rounded();
echo "<br>";

//highest() => Give hightest value number
$numbers = [1,2,3,4,5];
function highest(&$value){
  $hightest = max($value);
  echo "$hightest is the hightest value";
}
highest($numbers);
echo "<br>";

//lowest() => Give lower value number
function lowest(&$values){
  $lowest = min($values);
  echo "$lowest is the lowest value";
}
lowest($numbers);
echo "<br>";

//random() => Give a random value inside an array 
function random(&$values){
  $random = array_rand($values);
  echo "$random is the random value";
}
random($numbers);
  ?>
</body>
</html>