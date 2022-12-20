<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP - Arrays</title>
</head>

<body>
  <?php
  require './globals.php';

  echo '<h2>PHP - Arrays</h2>';

  hr();

  // Define a simple array composed of text strings
  echo '<h4>Define a simple array composed of text strings</h4>';
  $fruits = array("Pera", "Manzana", "Guayaba");
  echo '
<pre>
$fruits = array("Pera", "Manzana", "Guayaba");
echo $fruits[0].", ".$fruits[1]." and ".$fruits[2]."."
</pre> ==> ';
  echo $fruits[0] . ", " . $fruits[1] . " and " . $fruits[2] . ".";

  hr();

  // Define a simple array consisting of whole numbers and decimal numbers
  echo '<h4>Define a simple array consisting of whole numbers and decimal numbers</h4>';
  $numbers = array(0.02, 0.4, 1, 3, 5, 100.1);
  echo '
<pre>
$numbers = array(0.02, 0.4, 1, 3, 5, 100.1);
foreach ($numbers as $value) { 
  echo "Value is $value"
}
</pre> ==> <br>';
  foreach ($numbers as $value) {
    echo "Value is $value <br>";
  }

  hr();

  // Define a multidimensional array
  echo '<h4>Define a multidimensional array</h4>';
  $games = array(
    array("Game 1", 9, 60),
    array("Game 2", 7, 50),
    array("Game 3", 6, 40),
    array("Game 4", 10, 70)
  );
  echo '
<pre>
$games = array(
  array("Game 1", 9, 60),
  array("Game 2", 7, 50),
  array("Game 3", 6, 40),
  array("Game 4", 10, 70)
);
echo $games[0][0] . ": Stars: " . $games[0][1] . "/10, Price: " . $games[0][2] . "€";
echo $games[1][0] . ": Stars: " . $games[1][1] . "/10, Price: " . $games[1][2] . "€";
echo $games[2][0] . ": Stars: " . $games[2][1] . "/10, Price: " . $games[2][2] . "€";
echo $games[3][0] . ": Stars: " . $games[3][1] . "/10, Price: " . $games[3][2] . "€";
</pre> ==> <br>';
  echo $games[0][0] . ": Stars: " . $games[0][1] . "/10, Price: " . $games[0][2] . "€.<br>";
  echo $games[1][0] . ": Stars: " . $games[1][1] . "/10, Price: " . $games[1][2] . "€.<br>";
  echo $games[2][0] . ": Stars: " . $games[2][1] . "/10, Price: " . $games[2][2] . "€.<br>";
  echo $games[3][0] . ": Stars: " . $games[3][1] . "/10, Price: " . $games[3][2] . "€.<br>";

  hr();

  // Execute the function that allows to obtain the length of an array
  echo '<h4>Execute the function that allows to obtain the length of an array</h4>';
  $days = array("Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat");
  echo '
<pre>
$days = array("Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat");
echo count($days);
</pre> ==> ';
  //echo sizeof($days) is other option;
  echo count($days);

  hr();

  // Execute the function that allows to obtain the combination of two arrays
  echo '<h4>Execute the function that allows to obtain the combination of two arrays</h4>';
  $arrayA = array('cabra', 'luciérnaga', 'gambusino');
  $arrayB = array('montesa', 'de luz', 'dorado');
  $arrayCombined = array_combine($arrayA, $arrayB);
  echo '
<pre>
$arrayA = array("cabra", "luciérnaga", "gambusino");
$arrayB = array("montesa", "de luz", "dorado");
$arrayCombined = array_combine($arrayA, $arrayB);
print_r($arrayCombined);
</pre> ==> ';
  print_r($arrayCombined);

  hr();

  //Execute the function that once is given an array return the last element of it
  echo '<h4>Execute the function that once is given an array return the last element of it</h4>';
  $array = ['Element 1', 'Element 2', 'Element 3'];
  echo '
<pre>
$array = ["Element 1", "Element 2", "Element 3"];
echo end($array);
</pre> ==> ';
  echo end($array);

  hr();

  // Execute the function that once is given an array add a new element to the array in question
  echo '<h4>Execute the function that once is given an array add a new element to the array in question</h4>';
  $games = ['game 1', 'game 2', 'game 3', 'game 4'];
  $addGame = array_push($games, 'game 5');
  echo '
<pre>
$games = ["game 1", "game 2", "game 3", "game 4"];
$addGame = array_push($games, "game 5");
print_r($games);
</pre> ==> ';
  print_r($games);

  ?>
</body>

</html>