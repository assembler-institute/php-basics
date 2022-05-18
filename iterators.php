<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
 <!-- for -->

 <?php

for($i=0;$i<10;$i++)

{
echo $i;
}


?>


<!-- foreach -->
<?php
foreach (array(1, 2, 3, 4) as &$valor) {
$valor = $valor * 2;
}


echo $valor;
?>



<!-- while -->

<?php

$numero= 1;
while ($numero <= 10) 
{
echo $numero;
$numero = $numero + 1;
}

?>




<!-- do while -->
<?php
$numero= 1;

do {
echo $numero;
$numero++;   /*  es lo mismo que $numero = $numero + 1; */
} while ($numero <= 8);




?>










</body>
</html>