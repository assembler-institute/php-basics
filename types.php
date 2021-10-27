<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Types</title>
</head>
<body>
  <h1>Types</h1>
  <a href="/Assembler/Month6/php_basics/index.html">Home</a>
  <br/>
  <?php
$booly = true;
$integy = 2;
$floaty = 10.5;
$stringy = "stringy";
$arr = [$booly, $integy, $stringy ];
$objy = (object) [
  "bool" => $booly,
  "inte" => $integy,
  "srt" => $stringy,
  "arry" => $stringy,
];

function d($data){
  echo "<br/>";
  echo var_dump($data);
};

echo d($objy );

  ?>
</body>
</html>