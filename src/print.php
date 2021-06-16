<!-- <?php
    $echoVariable = "Printing by echo";
    echo $echoVariable;
    echo '\n';

    $printVariable = "Printing by print";
    print($printVariable);

    $printRVariable = "Printing by print_r";
    print_r($printRVariable);
?> -->
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Printing PHP</title>
</head>
<body>
  <h2>Print PHP</h2>
  <div>
    <p>
      <?php
        $echoVariable = "Printing by echo";
          echo $echoVariable;
      ?>
    </p>
  </div>
  <div>
    <p>
      <?php
        $printVariable = "Printing by print";
        print($printVariable);
      ?>
    </p>
  </div>
  <div>
    <p>
      <?php
        $printRVariable = "Printing by print_r";
        print_r($printRVariable);
      ?>
    </p>
  </div>
</body>
</html>