<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Print methods</title>
</head>
<body>
  <?php
//Generate an instruction that makes use of "echo"
$echo = "This is echo method";
echo $echo;

//Generate an instruction that makes use of "print"
$print = "This is print method \n implement new line";
print $print;

//Generate an instruction that makes use of "print_r", it is important that you assign a complex value to analyze its potential
$user = "Ricardo";
$age = "34";
$array = array("Name" => $user, "age" => $age);
print_r($array);
  ?>
</body>
</html>