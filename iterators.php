 <!-- for -->

 <?php

for($i=0;$i<10;$i++)

{
echo $i;
}



/* <!-- foreach --> */
foreach (array(1, 2, 3, 4) as &$valor) {
$valor = $valor * 2;
}


echo $valor;




/* <!-- while --> */


$numero= 1;
while ($numero <= 10) 
{
echo $numero;
$numero = $numero + 1;
}




/* <!-- do while --> */
$numero= 1;

do {
echo $numero;
$numero++;   /*  es lo mismo que $numero = $numero + 1; */
} while ($numero <= 8);



?>