<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iterators PHP</title>
</head>
<body>
	<h2>Iterators PHP</h2>
  <div>
		<?php for ($i = 1; $i <= 10; $i++): ?>
			<p><?php echo $i ?></p>
		<?php endfor ?>
  </div>
  <div>
		<?php
			$myArray = array(1, 2, 3, 4, 5);
			foreach($myArray as $myArrayItem) : ?>
				<p><?php echo $myArrayItem ?></p>
			<?php endforeach ?>
  </div>
  <div>
		<?php
			$i = 0;
			while($i<3 ) : ?>
				<p>
					<?php
						echo $i;
						$i++;
					?>
				</p>
			<?php endwhile ?>
  </div>
	<div>
		<p>
			<?php
				$i=2;
				do {
					echo $i;
					$i--;
				} while($i > -1)
			?>
		</p>
	</div>
</body>
</html>