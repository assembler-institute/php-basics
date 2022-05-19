<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iterators.php</title>
</head>
<body>
    <h2>Iterators</h2>

<!-- 
- Generate a snippet that makes use of for
- Generate a snippet that makes use of foreach
- Generate a snippet that uses while
- Generate a snippet that uses do while
-->

<?php

print "<strong>Loop For:</strong>";
echo "<br/>";
for ($i = 1; $i <= 5; $i++) {
    echo $i;
    echo "<br/>";
}
echo "<br/>";
echo "<br/>";

print "<strong>Loop forEach:</strong>";
$type = " great dog";
$dogs = array('Collie is a', 'Poodle is a', 'Irish Setter is a');
foreach ($dogs as $value) {
    echo "<br/>$value $type ";
}
echo "<br/>";
echo "<br/>";

print "<strong>Loop While:</strong>";
echo "<br/>";
$i = 1;
while ($i <= 5) {
    echo $i++;
    echo "<br/>";
}

echo "<br/>";
echo "<br/>";

print "<strong>Loop Do-While:</strong>";
echo "<br/>";

 $num = 1;
 do{
     echo $num;
     $num++;
     echo "<br/>";
 }while($num <= 5);

?>


</body>
</html>