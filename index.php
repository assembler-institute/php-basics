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
<h1 class="heading"><a href="index.php">PHP Basics</a></h1>
<h2 class="phpInfoLink"><a href="phpinfo.php">PHP Info</a></h2>
</div>
<div class="main">
<section class="printFile fileStyle">
<?php
include "./src/print.php";
?>
</section>
<section class="iteratorsFile fileStyle">
    <?php
include "./src/iterators.php";
?>
</section>
<section class="operatorsFile fileStyle">
<?php
include "./src/operators.php"
?>
</section>
<section class="datesFile fileStyle">
<?php
include "./src/dates.php";
?>
</section>
<section class="conditionalsFile fileStyle">
<?php
include "./src/conditionals.php";
?>
</section>
<section class="typesFile fileStyle">
<?php
include "./src/types.php";
?>
</section>
<section class="mathsFile fileStyle">
<?php
include "./src/maths.php";
?>
</section>
<section class="stringsFile fileStyle">
<?php
include "./src/strings.php";
?>
</section>
<section class="arraysFile fileStyle">
<?php
include "./src/arrays.php";
?>
</section>
<section class="functionsFile fileStyle">
<?php
include "./src/functions.php";
?>
</section>
</div>
<footer class="footer">
  <?php
include "./src/footer.php";
?>
</footer>
</body>
</html>