<?php
# PRINT
print "Hola<br><br>";


# PRINT + VARIABLE
$saludo = "Bienvenido";
print($saludo) . "<br><br>";


# PRINT + VARIABLE + TEXT
print($saludo) . " al mundo de la programación!<br><br>";

# FUNCTION REPLACE TEXT IN A STRING (SENSITIVE)
$vocales = array("a", "e", "o", "u", "A", "E", "I", "O", "U");
function reemplazarTexto($e)
{
    return str_replace($e, "i", "Apuntate a programacion decian... sera facil");
}
echo reemplazarTexto($vocales) . "<br><br>";
#str_replace    

# FUNCTION REPLACE TEXT IN A STRING (WITHOUT UPPER/LOWER CASE)
$vocalesSinMayus = array("a", "e", "o", "u");
function reemplazarTextoMayus($e)
{
    return str_ireplace($e, "i", "JAVASCRIPT TE ECHO DE MENOS");
}
echo reemplazarTextoMayus($vocalesSinMayus) . "<br><br>";
#str_ireplace

# FUNCTION REPEAT TEXT X TIMES
function repeatCaracola($palabra, $num)
{
    return str_repeat($palabra, $num) . "<br><br>";
}
echo repeatCaracola("¡Hola Caracola!", 20);
#str_repeat

# FUNCTION LENGTH TEXT STRING
$longitudPalabra = "Esternocleidomastoideo";
function longPalabra($p)
{
    return "La longitud de $p es " . strlen($p) . "<br><br>";
}
echo longPalabra($longitudPalabra);
#strlen


# FUNCTION FIRST OCCURRENCE OF A TEXT WITHIN A TEXT STRING
$texto = "Me llamo Alberto y me gusta la cerveza.";
function cogerPalabra($tex)
{
    return explode(" ", $tex);
}

#echo cogerPalabra()."<br>";
echo cogerPalabra($texto)[7] . "<br><br>";
#explode

# FUNCTION CAPITALIZED
function capitalizar($c)
{
    return ucfirst($c);
}
echo capitalizar("hola") . "<br>";
echo capitalizar("adios") . "<br><br>";
#ucfirst

# FUNCTION TRANSFORM TO LOWERCASE
$textToLower = "ME LLAMO ALBERTO Y ME GUSTA LA CERVEZA.";
function textoMin($t)
{
    return strtolower($t);
}
echo textoMin($textToLower) . "<br><br>";
#strtolower

# FUNCTION OBTAIN TEXT SUBSTRING FROM POSITION
$textPHP = "PHP";
function cogerPrimeraLetra($palabra)
{
    return substr($palabra, 0, 1);
}
echo cogerPrimeraLetra($textPHP);
#substr()

?>