<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inicio</title>
	<link rel="stylesheet" href="css/geral.css">
	<link rel="stylesheet" href="css/plugins.css">
	<link rel="stylesheet" href="css/<?=$style ?>.css">
	<link rel="stylesheet" href="bower_components/wow/css/libs/animate.css">
</head>

<body>

	<?php include ('includes/organisms/menu-responsivo.php') ?>

	<div class="layout">
		<header>
			<div class="container">
				<div class="logo wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s">
					<a href="index.php">
						<img src="images/logo-tag-topo.svg" alt="Logo Topo Tag">
					</a>	
				</div>

				<div class="links">

					<?php include ('includes/organisms/menu.php') ?>

					<a class="toggle" href="javascript:;">
						<span></span>
						<span></span>
						<span></span>
					</a>

					<ul class="social">
						<li class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
							<a href="#"><i class="fa fa-facebook"></i></a>
						</li>
						<li class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.9s">
							<a href="#"><i class="fa fa-github-alt"></i></a>
						</li>
					</ul>		
				</div>

				<h1><?=$chamada?></h1>

				<p>Code // Share // Reboot</p>
			</div><!-- container -->
		</header>

		<main>