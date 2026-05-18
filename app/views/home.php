<!DOCTYPE HTML>
<html>
	<head>
		<title>Maestros del Amor</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="<?= htmlspecialchars($ogDescription ?? '') ?>" />

		<meta property="og:title" content="<?= htmlspecialchars($ogTitle ?? APP_NAME) ?>" />
		<meta property="og:description" content="<?= htmlspecialchars($ogDescription ?? '') ?>" />
		<meta property="og:image" content="<?= htmlspecialchars($ogImage ?? '') ?>" />
		<meta property="og:url" content="<?= htmlspecialchars($ogUrl ?? BASE_URL) ?>" />
		<meta property="og:type" content="website" />

		<meta name="twitter:card" content="summary_large_image" />
		<meta name="twitter:title" content="<?= htmlspecialchars($ogTitle ?? APP_NAME) ?>" />
		<meta name="twitter:description" content="<?= htmlspecialchars($ogDescription ?? '') ?>" />
		<meta name="twitter:image" content="<?= htmlspecialchars($ogImage ?? '') ?>" />

		<link rel="stylesheet" href="<?= asset('assets/css/main.css') ?>" />
		<link rel="icon" href="<?= asset('images/favicon.ico') ?>" type="image/x-icon">
		<noscript><link rel="stylesheet" href="<?= asset('assets/css/noscript.css') ?>" /></noscript>
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<div id="header">

				<div class="inner">
					<header>
						<h1><a href="<?= BASE_URL ?>" id="logo">Maestros del amor</a></h1>
						<hr />
						<p>
							Consulta con nosotros, nuestros profesionales te estarán esperando <br>
							para brindarte la mejor atención y ayudarte a encontrar la solución que necesitas.
						</p>
					</header>
					<footer>
						<a href="#banner" class="scrolly scroll-down">
							<i class="fas fa-chevron-down"></i>
						</a>
					</footer>
				</div>

				<?php require_once LAYOUTS_PATH . '/nav.php'; ?>

			</div>

			<section id="banner">
				<header>
					<h2><a class="scrolly" href="#services">Garantizamos todos nuestros trabajos</a></h2>
					<p>
						Si a pesar de tus esfuerzos no logras alcanzar el éxito en tu vida, si te sientes solo, sin amor, con problemas de salud que no tienen explicación, 
						o si la pobreza y la mala suerte parecen seguirte, ha llegado el momento de acudir a los
						<a href="<?php echo getWhatsappUrl('Amarres de amor'); ?>" target="_blank">Maestros del Amor</a>.  
						<br><br>
						Te ofrecemos resultados garantizados: si no quedas satisfecho(a) con el trabajo realizado, 
						te devolveremos el 100% de tu dinero, incluyendo el valor de los materiales utilizados.  
						<br><br>
						Conoce más sobre nuestros servicios y contáctanos, estaremos disponibles para brindarte nuestra ayuda.
					</p>
				</header>
			</section>

			<?php require_once VIEWS_PATH . '/services.php'; ?>
			

			<div id="footer">
				<div class="container">
					<div class="row">

						<?php require_once VIEWS_PATH . '/comments.php'; ?>

						<section class="col-4 col-12-mobile">
							<header>
								<h2 class="icon solid fa-video circled"><span class="label">Posts</span></h2>
							</header>
							<ul class="divided">
								<li>
									<article class="post stub">
									<video width="auto" height="auto" controls preload="metadata">
										<source src="<?= asset('images/videos/video-testimony-1.mp4') ?>" type="video/mp4">
									</video>
										<header>
											<h3><a class="scrolly tweet autor" href="#comments">- Diego Guzmán</a></h3>
										</header>
										<span class="timestamp">hace 6 días</span>
									</article>
								</li>
								<li>
									<article class="post stub">
									<video width="auto" height="auto" controls preload="metadata">
										<source src="<?= asset('images/videos/video-testimony-2.mp4') ?>" type="video/mp4">
									</video>
										<header>
											<h3><a class="scrolly tweet autor" href="#comments">- Margarita Guzmán</a></h3>
										</header>
										<span class="timestamp">hace 3 semanas</span>
									</article>
								</li>
							</ul>
						</section>

						<?php require_once VIEWS_PATH . '/testimonys.php'; ?>

					</div>
					<hr />

					<?php require_once LAYOUTS_PATH . '/about.php'; ?>

				</div>
			</div>
		</div>

		<?php require_once LAYOUTS_PATH . '/scripts.php'; ?>
		
	</body>
</html>
