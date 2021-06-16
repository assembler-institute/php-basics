<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>
<?php
$count=0;
$variable=array('hola','ketal','estamos', 2,3);

for ($i=0;$i<=10;$i++){
    echo nl2br("Esto es un contador con 'for':\n$count\n\n");
    $count++;
    
}
?>
</p><p>
<?php
foreach($variable as $item){
    echo nl2br("Este es un elemento de un array con 'foreach':\n $item \n\n");
}
while($i<20){
    
    echo nl2br("Este es el contador de antes con 'While': $count \n");
    $count++;
    $i++;
}
do{
    echo nl2br("Este es el contador de antes con 'Do While': $count \n");
    $count++;
    $i++;
}while($i<30)

?>
</p>
</body>
</html>
