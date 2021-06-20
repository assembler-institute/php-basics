<?php
require_once "../Login/login-control.php";
revisar_si_existe_sesion();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Php datasheet</title>

	<!-- Para que no se almacenen los datos en el cache y se refresquen los Css y Js -->
	<meta http-equiv="Expires" content="0">
	<meta http-equiv="Last-Modified" content="0">
	<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
	<meta http-equiv="Pragma" content="no-cache">
	<?php
 header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
 header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado

?>

	<link rel="stylesheet" href="/css/styles.css?v=<?php echo time(); ?>" />
	<script src="/js/functions.js?v=<?php echo time(); ?>"></script>

	<link rel="stylesheet" href="../resources/style.css">
</head>

<body>
	<header>
		<h3>
			Php Datasheet
		</h3>
		<div>
			<button type="button">Login</button>
			<a href="../Login/logout.php">
				<button type="button">Logout</button>
			</a>

		</div>
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
			<?php include "print.php"; ?>
			<?php include "iterators.php"; ?>
			<?php include "operators.php"; ?>
			<?php include "dates.php"; ?>
			<?php include "conditionals.php"; ?>
			<?php include "types.php"; ?>
			<?php include "maths.php"; ?>
			<?php include "strings.php"; ?>
			<?php include "arrays.php"; ?>
			<?php include "functions.php"; ?>
			<?php include "phpinfo.php"; ?>
		</section>
	</main>
	<footer>
		<h4>
			Work done by Erick Noiztbander
		</h4>
		<script src="../resources/handle_sections.js"></script>
	</footer>
</body>

</html>