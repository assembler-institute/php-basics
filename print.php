<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Print</title>
</head>

<body>
	<?php
	$list = array("a" => "banana", "b" => "melon");
	$name = "Assembler";
	?>

	<!-- Generate an instruction that makes use of "echo" -->
	<h2><?php echo "Hello $name!"; ?></h2>
	<h2><?= "Hello $name!"; ?></h2>

	<!-- Generate an instruction that makes use of "print" -->
	<h2><?php print("Hello $name!"); ?></h2>

	<!-- Generate an instruction that makes use of "print_r" -->
	<h2><?php print_r($list); ?></h2>

</body>

</html>