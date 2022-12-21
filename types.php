<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP - Types</title>
</head>

<body>
  <?php
  require './globals.php';

  echo '<h2>PHP - Types</h2>';

  hr();

  // Boolean
  echo '<h4>Boolean</h4>';
  echo '
<pre>
$boolean = true;
var_dump($boolean);
</pre> ==> ';
  $boolean = true;
  var_dump($boolean);

  hr();

  // Integer
  echo '<h4>Integer</h4>';
  echo '
<pre>
$integer = 5;
var_dump($integer);
</pre> ==> ';
  $integer = 5;
  var_dump($integer);

  hr();

  // Float
  echo '<h4>Float</h4>';
  echo '
<pre>
$float = 0.5;
var_dump($float);
</pre> ==> ';
  $float = 0.5;
  var_dump($float);

  hr();

  // String
  echo '<h4>String</h4>';
  echo '
<pre>
$string = "This is a string";
var_dump($string);
</pre> ==> ';
  $string = 'This is a string';
  var_dump($string);

  hr();

  // Array
  echo '<h4>Array</h4>';
  echo '
<pre>
$array = [1, 2, 3];
var_dump($array);
</pre> ==> ';
  $array = [1, 2, 3];
  var_dump($array);

  hr();

  // Object
  echo '<h4>Object</h4>';
  echo '
<pre>
$object = (object) array("name" => "David");
var_dump($object);
</pre> ==> ';
  $object = (object) array('name' => 'David');
  var_dump($object);

  hr();

  // Null
  echo '<h4>Null</h4>';
  echo '
<pre>
$null = null;
var_dump($null);
</pre> ==> ';
  $null = null;
  var_dump($null);

  ?>
</body>

</html>