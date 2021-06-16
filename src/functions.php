<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Functions</title>
</head>
<body>
  <div>
    <h2>Functions PHP</h2>
    <p>
      <?php
        function sum($a, $b){
          return $a + $b;
        }
        $a = 10;
        $b = 5;
        $result = sum($a, $b);
        echo "Result of sum function <br/>";
        echo "$a + $b = $result";
      ?>
    </p>
    <p>
      <?php
        function mult($a, $b){
          return $a * $b;
        }
        $a = 10;
        $b = 5;
        $result = mult($a, $b);
        echo "Result of mult function <br/>";
        echo "$a * $b = $result";
      ?>
    </p>
    <p>
      <?php
        function div($a, $b){
          return $a / $b;
        }
        $a = 10;
        $b = 5;
        $result = div($a, $b);
        echo "Result of div function <br/>";
        echo "$a / $b = $result";
      ?>
    </p>
  </div>
</body>
</html>