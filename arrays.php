<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $array1= array("hola ", "que tal ", "muy bien ", "hehe");
     for ($i = 0; $i<4; $i++){
    echo $array1[$i];
     }
     ?>
     <br>
     <?php
    $array2 =array(2, 3, 1, 2.2, 3.4);
    for ($i = 0; $i<5; $i++){
        echo $array2[$i];
         }
         ?>
     <br>
     <?php
     $cars = array (
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)
      );
      echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
?>
<br>
<?php
$array3 =array(3, 4, 1, 3.2, 24);
echo count($array3)
?>
<br>
<?php
$array1 = array("green", "red", "blue");
$array2 = array("green", "yellow", "red");
$result = array_merge($array1, $array2);
print_r($result);
?>
<br>
<?php
    echo end($array2)
    ?>
<br>
<?php
$array5 = array("green", "yellow", "red");
 array_push($array5, "purple");
 for ($i = 0; $i<4; $i++){
 echo $array5[$i];
 }
    ?>

    
</body>
</html>