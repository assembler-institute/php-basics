<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basics</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<div class="header">
<h1 class="heading">PHP Basics</h1>
</div>
<div class="main">
<section class="printFile fileStyle">
<?php
include "print.php";
?>
</section>
<section class="iteratorsFile fileStyle">
    <?php
include "iterators.php";
?>
</section>
<section class="operatorsFile fileStyle">
<?php
include "operators.php"
?>
</section>
<section class="datesFile fileStyle">
<?php
include "dates.php";
?>
</section>
<section class="conditionalsFile fileStyle">
<?php
include "conditionals.php";
?>
</section>
<section class="typesFile fileStyle">
<?php
include "types.php";
?>
</section>
<section class="mathsFile fileStyle">
<?php
include "maths.php";
?>
</section>
<section class="stringsFile fileStyle">
<?php
include "strings.php";
?>
</section>
</div>
<footer class="footer">
  <?php
include "footer.php";
?>
</footer>
</body>
</html>