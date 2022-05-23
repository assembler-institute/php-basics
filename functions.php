<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Functions</title>
</head>
<body>
  <h1>Functions</h1>
  <a href="/Assembler/Month6/php_basics/index.html">Home</a>
  <br/>

  <?php
    function sum($a, $b){
      echo $a + $b;
    };
    function mult($a, $b){
      echo $a * $b;
    };
    function div($a, $b){
      echo $a / $b;
    };

    function oper($a, $op, $b){
      switch ($op) {
        case '+':
          echo $a + $b;
          break;
          case '-':
          echo $a - $b;
          break;
          case '/':
          echo $a / $b;
          break;
          case '*':
          echo $a * $b;
          break;
        default:
          break;
      }
    };
    sum(5, 6);
    echo "<br/>";

    mult(5, 6);
    echo "<br/>";
    
    div(5, 6);
    echo "<br/>";

    oper(5,"*",5);
    echo "<br/>";
  ?>
</body>
</html>