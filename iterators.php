<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iterators</title>
</head>
<body style="text-align:center">
  <h1>Iterators</h1>
  <a href="/Assembler/Month6/php_basics/index.html">Home</a>
  <br/>

  <?php
  
  echo "<h2 style='text-transform:uppercase; '>for loop</h2>";

  $color = ["red", "blue", "purple"];

  for ($i=0; $i < sizeof($color); $i++) {
    print "<h3 style='color:$color[$i]; ' >This is the color $color[$i] </h3>";
  }

  echo "<h2 style='text-transform:uppercase; '>foreach loop</h2>";
  
  $size = ["1.25rem", "1.50rem", "1.75rem"];

  foreach ($size as $sizes){
    echo "<h3 style='font-size:$sizes;'>This is my size: $sizes</h3>";
  }

  echo "<h2 style='text-transform:uppercase; '>while loop</h2>";

  $bgcolor=["red", "green", "blue"];

  $a=0;
  while ($a < sizeof($bgcolor)) {
    print "<div style='background-color:$bgcolor[$a]; color: white'>This is my background color: $bgcolor[$a]</div>";    
  $a++;
  }

  echo "<h2 style='text-transform:uppercase; '>do while loop</h2>";

  $emoji = ["😎", "🏖️", "😋"];
  $i = 0;

  do{
    echo "<div>$emoji[$i]</div> <br/>";
    $i++;
  }

  while ($i < count($emoji));
  ?>
</body>
</html>