<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>String</title>
</head>
<body>
  <?php
  
  //Print a text string
  print "This is text string.";

  //Print a text string that interpret variables
  $txtPrint = "text interpreted by value. \n";
  echo nl2br($txtPrint);

  //Concatenate a previously declared variable in a text string
  echo nl2br("Concatenate" . $txtPrint);


//Function that allows you to replace text in a string (case sensitive)
function replace(&$value){
$new_str = str_replace('interpreted', 'sensitive-case replaced',$value);
echo $new_str;
  }
  replace($txtPrint);
echo "<br>";

//function that allows you to replace text in a string (without taking into account upper / lower case)
function replaceIn(&$value){
  $new_str = str_ireplace('Interpreted', 'insensitive-case replaced',$value);
  echo $new_str;
    }
    replaceIn($txtPrint);
    echo "<br>";


//function that allows you to write a text N times
function whiteLimitTImes(&$parameter){
      echo nl2br(str_repeat($parameter, 6));
    }
    whiteLimitTImes($txtPrint);
    echo "<br>";


//function that allows to obtain the length of a text string
    function getLength(&$parameter){
  echo strlen($parameter);
  }
  getLength($txtPrint);
  echo "<br>";


//function that allows to obtain the position of the first occurrence of a text within a text string
function getStringPosition(&$string, &$textPosition){
  echo strpos($string,$textPosition);
}
$word = 'by';
getStringPosition($txtPrint,$word);
echo "<br>";


//function that allows a text string to be capitalized
function toUpperCase(&$string){
 echo strtoupper($string);
 echo "<br>";
}
toUpperCase($txtPrint);


//function that allows you to transform a text string to lowercase
function toLowerCase(&$string){
  echo strtolower($string);
}
toLowerCase($txtPrint);
echo "<br>";

//function that allows to obtain a text substring from a given position
function getStringByPosition(&$string){
  $s = substr($string, 5);
  echo $s;
}
getStringByPosition($txtPrint);
  ?>
</body>
</html>