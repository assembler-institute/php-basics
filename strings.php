<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./src/css/main.css" rel="stylesheet" />
    <title>Strings</title>
</head>

<body class=body>

    <h2 class="header"> Text strings: </h2>
    <fieldset class= fieldset> 
        <legend>Print a text string:
        </legend>
        <div class="container" id="container">
        <?php
        echo "I'm about to learn PHP!<br>";
        ?>
        
        </div>
    </fieldset>
    <br>
    <fieldset class= fieldset> 
        <legend>Print a text string that interpret variables
        </legend>
        <div class="container" id="container">
        <?php
        $txt1 = "Learning PHP";
        echo "<h2>" . $txt1 . "</h2>";
        ?>

        </div>
    </fieldset>
    <br>
    <fieldset class= fieldset> 
        <legend>Concatenate a previously declared variable in a text string:
        </legend>
        <div class="container" id="container">
        <?php
        $txt1 = "MSD Candidate at";
        $txt2 = " Assembler School of Software";
        echo "Marcel Barrerio: " . $txt1 . "" . $txt2 . "<br>";
        ?>

        </div>
    </fieldset>

    <fieldset class= fieldset> 
        <legend>Execute the function that allows you to replace text in a string (case sensitive):
        </legend>
        <div class="container" id="container">
        <?php
        $tx1 = "I want to learn javascript";
        $tx2 = str_replace('javascript', 'PHP', $tx1);
        print_r($tx2);
?>
        </div>
    </fieldset>
    <br>
    <fieldset class= fieldset> 
        <legend>Execute the function that allows you to write a text N times:
        </legend>
        <div class="container" id="container">
        <?php
        echo str_repeat("&#10003-", 10);
        ?>
        </div>
    </fieldset>
    <br>
    <fieldset class= fieldset> 
        <legend>Execute the function that allows to obtain the length of a text string:
        </legend>
        <div class="container" id="container">
        <?php
        $str1 = 'Marcel Barrerio: ';
        echo ($str1);
        echo strlen( $str1);
        ?>
        </div>
    </fieldset>
    <br>
    <fieldset class= fieldset> 
        <legend>Executes the function that allows to obtain the position of the first occurrence of a text within a text string:
        </legend>
        <div class="container" id="container">
        <?php
        echo strpos("I love php, I love php too!","php");
        ?>
        </div>
    </fieldset>
    <fieldset class= fieldset> 
        <legend>Execute the function that allows a text string to be capitalized and other lowercase:
        </legend>
        <div class="container" id="container">
        <?php
        echo strtoupper("Assembler School of Software  ");
        echo strtolower("    - Assembler School of Software");
        ?>
        </div>
    </fieldset>
    <fieldset class= fieldset> 
        <legend>Execute the function that allows to obtain a text substring from a given position:
        </legend>
        <div class="container" id="container">
        <?php
          $s = 'PHP substring';
          $result = substr($s, 0, 3); 
          echo "<li>PHP substring</li>";
          echo $result;// PHP
        ?>
        </div>
    </fieldset>
    
</body>

</html>