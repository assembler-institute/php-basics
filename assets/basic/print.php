
<?php
// Using "echo"
echo "<h4>Echo message</h4>";

echo "Echo message <br>";

// Using "print"
echo "<h4>Print message</h4>";

print "Print message <br>";

// Using "print_r"
echo "<h4>print_r() message</h4>";

$demoobject = array("name" => "Ricard", "lastName" => "Garcia", "petName" => "Alai");
echo "<pre class='demo-code'>", print_r($demoobject, true), "</pre>";
?>
