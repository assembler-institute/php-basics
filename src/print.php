
<div>
<h3>Using echo, print and print_r()</h3>
<h4>echo</h4>
<h5>
    <?php
  echo '$myName = "Eunyoung Kim";</br>
echo "Name:" . $myName; <p>output:</p>';
$myName = "Eunyoung Kim";
echo "Name:" . $myName;
?>
</h5>

<h4>print</h4>
<h5>
    <?php
echo '$myEmail = "aaa@aaa.com";</br>
print "Email: $myEmail"; <p>output:</p>'; 
$myEmail = "aaa@aaa.com";
print "Email: $myEmail";
?>
</h5>


<h4>print_r()</h4>
<h5>
    <?php
    echo '$myPhoneData = array("Home" => "123-4567", "Mobile" => array("Mobile_1" => "012-321-2134", "Mobile_2" => "012-353-1233"), "Office" => "212-1234");</br>
print_r($myPhoneData); <p>output:</p>';
$myPhoneData = array("Home" => "123-4567", "Mobile" => array("Mobile_1" => "012-321-2134", "Mobile_2" => "012-353-1233"), "Office" => "212-1234");
print_r($myPhoneData);
?>
</h5>

</div>