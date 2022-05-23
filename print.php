<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prints</title>
</head>
<body>
  <h1>Prints</h1>
  <a href="/Assembler/Month6/php_basics/index.html">Home</a>
  <br/>
  <?php
    $arr = ["Im", "the true", "print_r", "that is just printed through a print/echo function"];

    $arr1 = ["Im", "the false", "print_r"];
    
    echo "<h3>I am the echo function </h3>";
    
    print "<h3>I am the print function </h3>";
    
    print_r($arr);
    
    echo "\n\n";
    
    print_r($arr1, false);
    
    echo "\n\n";
    
    var_dump($arr)
  ?>
</body>
</html>

