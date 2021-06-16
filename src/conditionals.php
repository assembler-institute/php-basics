<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditionals</title>
</head>
<body>
    <div>
			<h2>Conditionals PHP</h2>
			<p>
				<?php
					$currentDay = date("D");
					if ($currentDay == "Mon"){
						echo "We are on Monday";
					}
				?>
			</p>
			<p>
				<?php
					$currentMonth = date("m");
					if ($currentMonth == 10){
						echo "We are in October";
					}
				?>
			</p>
			<p>
				<?php
					$currentMinute = date("i");
					if ($currentMinute < 10){
						echo "The current minute is less than 10";
					}elseif ($currentMinute > 15){
						echo "The current minute is more than 15";
					}else{
						echo "Does not meet any conditions";
					}
				?>
			</p>
    </div>
</body>
</html>