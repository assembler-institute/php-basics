<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h3>Using echo, print and print_r()</h3>
<h4>echo</h4>
  <?php
$myName = "Eunyoung Kim";
echo "<h5>Name: $myName</h5>";
?>

<h4>print</h4>
  <?php
$myEmail = "aaa@aaa.com";
print "<h5>Email: $myEmail</h5>";
?>

<h4>print_r()</h4>
<h5>
    <?php
$myPhoneData = array("Home" => "123-4567", "Mobile" => array("Mobile_1" => "012-321-2134", "Mobile_2" => "012-353-1233"), "Office" => "212-1234");
print_r($myPhoneData);
?>
</h5>

</body>
</html>