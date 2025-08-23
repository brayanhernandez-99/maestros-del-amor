<!DOCTYPE HTML>
<html>
	<head>
		<title>Maestros del Amor</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="/assets/css/noscript.css" /></noscript>
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
			<div id="header">

				<!-- Inner -->
					<div class="inner">
						<header>
							<h1><a href="/" id="logo">Maestros del amor</a></h1>
							<hr />
							<p>
								Consulta con nosotros, nuestros profesionales te estarán esperando <br>
								para brindarte la mejor atención y ayudarte a encontrar la solución que necesitas.
							</p>
						</header>
						<footer>
							<a href="#services" class="button circled scrolly">Servicios</a>
						</footer>
					</div>

				<!-- Nav -->
				<?php require_once LAYOUTS_PATH . '/nav.php'; ?>

			</div>

			<!-- Banner -->
			<section id="banner">
				<header>
					<h2><a>Garantizamos todos nuestros trabajos</a></h2>
					<p>
						Si a pesar de tus esfuerzos no logras alcanzar el éxito en tu vida, si te sientes solo, sin amor, con problemas de salud que no tienen explicación, 
						o si la pobreza y la mala suerte parecen seguirte, ha llegado el momento de acudir a los
						<a href="<?php echo WHATSAPP_URL; ?>" target="_blank">Maestros del Amor</a>.  
						<br><br>
						Te ofrecemos resultados garantizados: si no quedas satisfecho(a) con el trabajo realizado, 
						te devolveremos el 100% de tu dinero, incluyendo el valor de los materiales utilizados.  
						<br><br>
						Conoce más sobre nuestros servicios y contáctanos, estaremos disponibles para brindarte nuestra ayuda.
					</p>
				</header>
			</section>

			<!-- Carousel -->
			<?php require_once VIEWS_PATH . '/services.php'; ?>
			

			<!-- Footer -->
				<div id="footer">
					<div class="container">
						<div class="row">

							<!-- Comentarios -->
							<?php require_once VIEWS_PATH . '/comments.php'; ?>

							<!-- Posts -->
								<section class="col-4 col-12-mobile">
									<header>
										<h2 class="icon solid fa-video circled"><span class="label">Posts</span></h2>
									</header>
									<ul class="divided">
										<li>
											<article class="post stub">
												<header>
													<h3><a class="scrolly" href="#comments">Nisl fermentum integer</a></h3>
												</header>
												<span class="timestamp">hace 3 horas</span>
											</article>
										</li>
										<li>
											<article class="post stub">
												<header>
													<h3><a class="scrolly" href="#comments">Phasellus portitor lorem</a></h3>
												</header>
												<span class="timestamp">hace 6 horas</span>
											</article>
										</li>
										<li>
											<article class="post stub">
												<header>
													<h3><a class="scrolly" href="#comments">Magna tempus consequat</a></h3>
												</header>
												<span class="timestamp">ayer</span>
											</article>
										</li>
										<li>
											<article class="post stub">
												<header>
													<h3><a class="scrolly" href="#comments">Feugiat lorem ipsum</a></h3>
												</header>
												<span class="timestamp">hace 2 días</span>
											</article>
										</li>
									</ul>
								</section>

							<!-- Testimonios -->
							<?php require_once VIEWS_PATH . '/testimonys.php'; ?>

						</div>

						<!-- Contacto -->
						<?php require_once LAYOUTS_PATH . '/about.php'; ?>


					</div>
				</div>

		</div>

		<?php require_once LAYOUTS_PATH . '/scripts.php'; ?>

	</body>
</html>
