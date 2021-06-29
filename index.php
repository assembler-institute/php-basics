<?php
require_once "./Login/login-control.php";
$alert = revisar_si_existe_sesion();
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
 header("Expires: Sat, 1 Jul 2000 05:00:00 GMT");

// Fecha en el pasado
?>

	<link rel="stylesheet" href="/css/styles.css?v=<?php echo time(); ?>" />
	<script src="/js/functions.js?v=<?php echo time(); ?>"></script>

	<link rel="stylesheet" href="./resources/style.css">

</head>

<body>

	<header>
		<h3>
			Php Datasheet
		</h3>
	</header>

	<main class="main__container--login">
		<section class="main__form--login">
			<form action="./Login/login.php" method="POST">
			<div>
				<img src="./resources/LOGO_pagina_web_rosa_simple_favicon_02.png" alt="logo">
			</div>
				<input type="input" name="email" type="email" placeholder="Entre su usuario plz">
				<input type="input" name="password" type="password" placeholder="Sus passwordz">
				<button type="submit">Log in</button>
				<?= $alert ? "<div>$alert[texto]</div>" : "" ?>
			</form>
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