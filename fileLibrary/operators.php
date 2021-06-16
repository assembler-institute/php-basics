<?php

 
 echo nl2br("El primer operador será 1\nEl segundo será 2\n\n");
 

 
?>
<?php

 var_dump (1+2);
 echo nl2br("Esto es una suma\n");
 
 var_dump (1*2);
 echo nl2br("Esto es una multiplicación\n");
 
 var_dump (1/2);
 echo nl2br("Esto es una división\n");
 
 var_dump (1-2);
 echo nl2br("Esto es una resta\n");
 
 var_dump (1%2);
 echo nl2br("Esto es una el resto \n\n");

?>
<?php
echo nl2br("\n");
echo nl2br("¿Los valores son iguales?\n");
var_dump (1==2);

echo nl2br("\n");
echo nl2br("¿Los valores son distintos?\n");
var_dump (1!=2);


echo nl2br("\n");
echo nl2br("¿El primero es menor?\n");
var_dump (1<2);


echo nl2br("\n");
echo nl2br("¿El primero es mayor?\n");
var_dump (1>2);


echo nl2br("\n");
echo nl2br("¿El primero es mayor o igual? \n");
var_dump (1<=2);


echo nl2br("\n");
echo nl2br("¿El primero es mayor o igual?\n");
var_dump (1>=2);


?>

<?php

echo nl2br("\n\n");
echo nl2br("con && todas las anteriores deben cumplirse\n");
var_dump (1==2 && 1<2 && 1>2 && 1!=2 && 1<=2);

echo nl2br("\n\n");
echo nl2br("con || una de las anteriores\n");
var_dump (1==2 || 1<2 || 1>2 || 1!=2 || 1<=2);

?>