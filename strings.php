<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Strings</title>
</head>
<body>
  <h1>Strings</h1>
  <a href="/Assembler/Month6/php_basics/index.html">Home</a>
  <br/>
  <?php
  echo "This is a string text";
  echo "<br/>";

  $string = "string variable";
  echo $string;
  echo "<br/>";

  echo "This is a $string embebed into a text";
  echo "<br/>";

  echo str_replace("World","Peter","Hello world");
  echo "<br/>";

  echo str_ireplace("world","Peter","Hello world");
  echo "<br/>";

  echo str_repeat("Hello world <br/>", 5);

  echo strlen("Hello world");
  echo "<br/>";

  echo strpos("Hello world", "o");
  echo "<br/>";

  echo strtoupper("Hello world");
  echo "<br/>";

  echo strtolower("Hello world");
  echo "<br/>";

  echo substr("Hello world", 0,5);
  echo "<br/>";
  ?>
</body>
</html>