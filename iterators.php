<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iterators methods</title>
</head>
<body>
  <?php

//A)for
$users = ["Jose", "Carlos", "Maria", "Joan", "Vasco"];
echo "A)f or loop:<br>";
for($i = 1; $i < count($users); $i++) {
  $numberOfUsers =+ $i;
  echo "$numberOfUsers";
  echo "<br>";
}
echo "<br>";

//B)foreach
echo "B) foreach loop:<br>";
$brand = array("Ferrari", "Ford", "Toyota");
foreach ($brand as $cars) {
  echo "$cars <br>";
}
echo "<br>";

//C)while loop
echo "C) While loop:<br>";
$totalCars = count($brand);
$limitOfCars = 10;
while($totalCars <= $limitOfCars) {
  echo "The carpark $totalCars is available for parking";
  echo "<br>";
  $totalCars++;
}
echo "<br>";
//D)Do loop
echo "D) Do loop:<br>";
$limit = 50;
do {
echo "Limit is $limit"."<br>";
} while($limit < 50);
  ?>
</body>
</html>