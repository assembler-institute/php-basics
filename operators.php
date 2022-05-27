<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS only -->
    <link href="./src/css/style.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Operators</title>
</head>
<header class="p-3 bg-dark text-white">
    <div class="containerPHP">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="/php-basics/" class="nav-link px-2 text-secondary">Home</a></li>
          <li><a href="/php-basics/operators.php" class="nav-link px-2 text-white">Operators</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
          <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
          <li><a href="#" class="nav-link px-2 text-white">About</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-white bg-dark" placeholder="Search..." aria-label="Search">
          
        </form>

        <div class="text-end">
            
          <button type="button" class="btn btn-outline-light me-2">Login</button>
          <button type="button" class="btn btn-warning">Sign-up</button>
        </div>
      </div>
    </div>
  </header>

  <div class="b-example-divider"></div>
<body class=body>
<div class="divider"></div>
    <h4 class="header"> Arithmetic operators: </h4>
<fieldset class= fieldset> 
    <legend>Create an example of use for arithmetic operators: +, -, *, /, and%</legend>
    <div class="container" id="container"> 
        <li>
            <?php
            echo '10 + 5 =';
            $x = 10;
            $y = 5;
            echo $x + $y;
            ?>
        </li>
        <li>
            <?php
            echo '10 - 5 = ';
            $x = 10;
            $y = 5;
            echo $x - $y;
            ?>
        </li>
        <li>
            <?php
            echo '10 * 5 = ';
            $x = 10;
            $y = 5;
            echo $x * $y;
            ?>
        </li>
        <li>
            <?php
            echo '10 / 5 = ';
            $x = 10;  
            $y = 5;
            echo $x / $y;
            ?>
        </li>
        <li>
            <?php
            echo '10 % 5 = ';
            $x = 10;  
            $y = 5;
            echo $x % $y;
            ?>
        </li>
    </div>
    </fieldset>

<h2 class="header"> Comparison operators: </h2>
<fieldset class= fieldset> 
    <legend>Create a usage example for comparison operators: ==,! =, <,>, <=,> =</legend>
    <div class="container" id="container"> 
    <li>
        <?php
        echo 'It is 10 == 10? ';
        $x = 10;
        $y = 10;
        var_dump($x == $y); 
        ?>
    </li>
    <li>
        <?php
        echo 'It is 10 != 10? ';
        $x = 10;
        $y = 10;
        var_dump($x != $y); 
        ?>
    </li>
    <li>
        <?php
        echo 'It is 10 = 9? ';
        $x = 10;
        $y = 9;
        var_dump($x == $y); 
        ?>
    </li>
    <li>
        <?php
        echo 'It is 10 > 20? ';
        $x = 10;
        $y = 20;
        var_dump($x > $y); 
        ?>
    </li>
    <li>
        <?php
        echo 'It is 10 < 20? ';
        $x = 10;
        $y = 20;
        var_dump($x < $y); 
        ?>
    </li>
    <li>
        <?php
        echo 'It is 20 <= 20? ';
        $x = 20;
        $y = 20;
        var_dump($x <= $y); 
        ?>
    </li>
    </div>
    </fieldset>

<h2 class="header"> Logical operators: </h2>
<fieldset class= fieldset> 
    <legend>Create an example of use for logical operators: &&, And; ||, Or; ! (NOT); Xor</legend>
    <div class="container" id="container"> 
    <li>
        <?php
        echo 'It is 100 = 100 <strong>AND</strong> 50 = 50? ';
        $x = 100;  
        $y = 50;
        
        if ($x == 100 and $y == 50) {
            echo "<mark>True</mark>";
        }
        ?>
    </li>
    <li>
        <?php
        echo 'It is 100 = 100 <strong>&&</strong> 50 = 50? ';
        $x = 100;  
        $y = 50;
        
        if ($x == 100 && $y == 50) {
            echo "<mark>True</mark>";
        }
        ?>
    </li>
    <li>
        <?php
        echo 'It is 100 = 100 <strong>OR || </strong> 50 = 50? ';
        $x = 100;  
        $y = 50;
        
        if ($x == 100 || $y == 80) {
            echo "<mark>True</mark>";
        }
        ?>
    </li>
    <li>
        <?php
        echo '100 = 100 <strong>XOR</strong> 50 = 50? ';
        $x = 100;  
        $y = 50;
        
        if ($x == 100 xor $y == 80) {
            echo "<mark>True</mark>";
        }
        ?>
    </li>
    
    </div>
    </fieldset>

</body>

</html>