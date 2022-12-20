<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP - Strings</title>
</head>

<body>
  <?php
  require './globals.php';

  echo '<h2>strings.php</h2>';

  hr();

  // Print a text string
  echo '<h4>Print a text string</h4>';
  echo '<pre>echo "PHP the beast";</pre> ==> ';
  echo "PHP the beast";

  hr();

  // Print a text string that interpret variables
  echo '<h4>Print a text string that interpret variables</h4>';
  $text = "PHP flow";
  echo '
<pre>
$text = "PHP flow";
echo $text; 
</pre> ==> ';
  echo $text;

  hr();

  // Concatenate a previously declared variable in a text string
  echo '<h4>Concatenate a previously declared variable in a text string</h4>';
  $text1 = "PHP";
  $text2 = "8.2";
  echo '
<pre>
$text1 = "PHP"; 
$text2 = "8.2";
echo $text1 . " " . $text2;
</pre> ==> ';
  echo $text1 . " " . $text2;

  hr();

  // Execute the function that allows you to replace text in a string (case sensitive)
  echo '<h4>Execute the function that allows you to replace text in a string (case sensitive)</h4>';
  $text1 = "I love PHP";
  $text2 = str_replace('PHP', 'JS', $text1);
  echo
  '<pre>
$text1 = "I love PHP";
$text2 = str_replace("PHP", "JS", $text1);
print($text2);
</pre> ==> ';
  echo ($text2);

  hr();

  //Execute the function that allows you to replace text in a string (without taking into account upper / lower case)
  echo '<h4>Execute the function that allows you to replace text in a string (without taking into account upper / lower case)</h4>';
  $text1 = "I love PHP";
  $text2 = str_ireplace('php', 'JS', $text1);
  echo
  '<pre>
$text1 = "I love PHP";
$text2 = str_ireplace("php", "JS", $text1);
print($text2);
</pre> ==> ';
  echo ($text2);

  hr();

  // Execute the function that allows you to write a text N times
  echo '<h4>Execute the function that allows you to write a text N times</h4>';
  echo '
<pre>
echo str_repeat("ja", 10);
</pre> ==> ';
  echo str_repeat("ja", 10);

  hr();

  // Execute the function that allows to obtain the length of a text string
  echo '<h4>Execute the function that allows to obtain the length of a text string</h4>';
  $string = 'Hello world';
  echo '
<pre> 
$string = "Hello world";
echo ($string);
</pre> ==> ';
  echo ($string . ' <br>');
  echo '<pre>echo strlen($string);</pre> ==> ';
  echo strlen($string);

  hr();

  //Executes the function that allows to obtain the position of the first occurrence of a text within a text string
  echo '<h4>Executes the function that allows to obtain the position of the first occurrence of a text within a text string</h4>';
  echo '<pre>echo strpos("I love my cats! cats lovers", "cat");</pre> ==> ';
  echo strpos("I love my cats! cats lovers", "cats");

  hr();

  // Execute the function that allows a text string to be capitalized
  echo '<h4>Execute the function that allows a text string to be capitalized</h4>';
  echo '<pre>echo strtoupper("php");</pre> ==> ';
  echo strtoupper("php");

  hr();

  // Execute the function that allows you to transform a text string to lowercase
  echo '<h4>Execute the function that allows you to transform a text string to lowercase</h4>';
  echo '<pre>echo strtolower("PHP");</pre> ==> ';
  echo strtolower("PHP");

  hr();

  // Execute the function that allows to obtain a text substring from a given position
  echo '<h4>Execute the function that allows to obtain a text substring from a given position</h4>';
  $string = 'PHP substr';
  $result = substr($string, 0, 3);
  echo '
<pre>
$string = "PHP substr";
$result = substr($string, 0, 3);
echo $result;
</pre> ==> ';
  echo $result;

  ?>
</body>

</html>