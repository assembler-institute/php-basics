<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<div>
		<h2>Document PHP</h2>
		<!-- Y-m-d format for today -->
		<p>Current date: <?php echo  date("Y-m-d")  ?></p>
		<!-- Today date in any format -->
		<p>Current date: <?php echo  date("j F, Y")  ?></p>
		<!-- Current day -->
		<p>Current day: <?php echo  date("D")  ?></p>
		<!-- Current month in numerical format -->
		<p>Current month: <?php echo  date("m")  ?></p>
		<!-- Current minute with leading zeros -->
		<p>Current minute: <?php echo  date("i")  ?></p>
	</div> 
</body>
</html>