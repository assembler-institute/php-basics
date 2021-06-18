<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Php datasheet</title>

	<link rel="stylesheet" href="resources/style.css">
</head>

<body>
	<header>
		<h4>
			Php Datasheet
		</h4>
	</header>
	<main>
		<aside>
			<nav class="nav">
				<ul id="nav__aside">
					<li>
						<button type="button">Print</button>
					</li>
					<li>
						<button type="button">Iterators</button>
					</li>
					<li>
						<button type="button">Operators</button>
					</li>
					<li>
						<button type="button">Dates</button>
					</li>
					<li>
						<button type="button">Conditionals</button>
					</li>
					<li>
						<button type="button">Types</button>
					</li>
					<li>
						<button type="button">Maths</button>
					</li>
					<li>
						<button type="button">Strings</button>
					</li>
					<li>
						<button type="button">Arrays</button>
					</li>
					<li>
						<button type="button">Functions</button>
					</li>
					<li>
						<button type="button">PhpInfo</button>
					</li>
				</ul>
			</nav>
		</aside>
		<section class="main__container" id="main__container">
			<?Php
			include 'print.php';
			?>
			<?Php
			include 'iterators.php';
			?>
			<?Php
			include 'operators.php';
			?>
			<?Php
			include 'dates.php';
			?>
			<?Php
			include 'conditionals.php';
			?>
			<?Php
			include 'types.php';
			?>
			<?Php
			include 'maths.php';
			?>
			<?Php
			include 'strings.php';
			?>
			<?Php
			include 'arrays.php';
			?>
			<?Php
			include 'functions.php';
			?>
			<?Php
			include 'phpinfo.php';
			?>
		</section>
	</main>
	<footer>
		<h4>
			Work done by Erick Noiztbander
		</h4>
		<script src="resources/handle_sections.js"></script>
	</footer>
</body>

</html>