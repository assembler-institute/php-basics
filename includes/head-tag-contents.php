<title><?php print $PAGE_TITLE; ?></title>

<?php if ($CURRENT_PAGE == "Index") { ?>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
<?php } ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- <link rel="stylesheet" href="assets/css/styles.css" type="text/css"> -->

<style>
	/* <?php include "assets/css/styles.css"; ?> */
	body {
		padding: 0;
		margin: 0;
		line-height: 1.6;
	}

	header,
	main {
		overflow: auto;
	}

	.navbar {
		padding: 30px;
		background-color: #ffcc80;
	}

	#main-content {
		margin-top: 20px;
	}

	.article {
		margin-top: 20px;
		margin-bottom: 20px;
	}

	.article h3 {
		color: #1a237e;
	}

	.article h5 {
		text-transform: capitalize;
	}

	.footer {
		font-size: 14px;
		text-align: center;
		margin-bottom: 20px;
	}

	button {
		padding: 5px 20px 5px 20px;
		width: 140px;
		margin-bottom: 20px;
		border-radius: 5px;
		display: inline-block;
		box-sizing: border-box;
		text-decoration: none;
		color: #000000;
		background-color: #ffffff;
		text-align: center;
		transition: all 0.15s;
	}

	button:hover {
		text-shadow: 0 0 2em rgba(255, 255, 255, 1);
		color: #ffffff;
		border-color: #ffffff;
	}
</style>

