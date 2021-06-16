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
<section class="printFile">
<?php
include "print.php";
?>
</section>
<section class="iteratorsFile">
    <?php
include "iterators.php";
?>
</section>
<section class="operatorsFile">
<?php
include "operators.php"
?>
</section>
<section class="datesFile">
<?php
include "dates.php";
?>
</section>
</div>
<div class="footer">
  <?php
include "footer.php";
?>
</div>
</body>
</html>