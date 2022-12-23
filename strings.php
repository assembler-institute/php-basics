<?php
print "Print a text string<br>";

$a = "Print a text string";
print $a."two";
echo "<br><br>";

#case sensitive
$phrase = "Monkey D Luffy is our captain";

echo str_replace("Monkey D Luffy", "Yonkou strawhat", $phrase);

echo "<br><br>";
#without taking into account upper / lower case
$king = "Mamodo rules is a king";

echo str_ireplace("mamodo RULES", "Zatch", $king);
echo "<br><br>";
$dance = "\OwO/";
echo str_repeat($dance, 10);
echo "<br><br>";
$w = 'wzr e s x r d cf tv g y b u h n j i m';
echo strlen($w);
echo "<br><br>";
$thinks = "twegdfj dos dfhsf";
echo strpos($thinks,'dos');
echo "<br><br>";
$mary = "When i go to the bar, i like eat macarroni";
echo strtoupper($mary);
echo "<br><br>";
$marydo = "I HATE THIS GAME, IS SO DISGUSTING";
echo strtolower($marydo);
echo "<br><br>";
$paco = "a paco le gusta el queso";
echo substr($paco, 4, -2);
?>