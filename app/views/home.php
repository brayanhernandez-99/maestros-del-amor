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
				<?php require_once LAYOUTS_PATH . '/nav-bar.php'; ?>

			</div>

			<!-- Banner -->
			<section id="banner">
				<header>
					<h2><a>Garantizamos todos nuestros trabajos</a></h2>
					<p>
						Si a pesar de tus esfuerzos no logras alcanzar el éxito en tu vida, si te sientes solo, sin amor, con problemas de salud que no tienen explicación, 
						o si la pobreza y la mala suerte parecen seguirte, ha llegado el momento de acudir a los 
						<a href="https://wa.me/573192031330?text=Hola%20maestro,%20busco%20un%20servicio">Maestros del Amor</a>.  
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

							<!-- Tweets -->
								<section class="col-4 col-12-mobile">
									<header>
										<h2 class="icon solid fa-comment circled"><span class="label">Tweets</span></h2>
									</header>
									<ul class="divided">
										<li>
											<article class="tweet">
												Amet nullam fringilla nibh nulla convallis tique ante sociis accumsan.
												<span class="timestamp">hace 5 minutos</span>
											</article>
										</li>
										<li>
											<article class="tweet">
												Hendrerit rutrum quisque.
												<span class="timestamp">hace 30 minutos</span>
											</article>
										</li>
										<li>
											<article class="tweet">
												Curabitur donec nulla massa laoreet nibh. Lorem praesent montes.
												<span class="timestamp">hace 3 horas</span>
											</article>
										</li>
										<li>
											<article class="tweet">
												Lacus natoque cras rhoncus curae dignissim ultricies. Convallis orci aliquet.
												<span class="timestamp">hace 5 horas</span>
											</article>
										</li>
									</ul>
								</section>

							<!-- Posts -->
								<section class="col-4 col-12-mobile">
									<header>
										<h2 class="icon solid fa-video circled"><span class="label">Posts</span></h2>
									</header>
									<ul class="divided">
										<li>
											<article class="post stub">
												<header>
													<h3><a href="#">Nisl fermentum integer</a></h3>
												</header>
												<span class="timestamp">hace 3 horas</span>
											</article>
										</li>
										<li>
											<article class="post stub">
												<header>
													<h3><a href="#">Phasellus portitor lorem</a></h3>
												</header>
												<span class="timestamp">hace 6 horas</span>
											</article>
										</li>
										<li>
											<article class="post stub">
												<header>
													<h3><a href="#">Magna tempus consequat</a></h3>
												</header>
												<span class="timestamp">Yesterday</span>
											</article>
										</li>
										<li>
											<article class="post stub">
												<header>
													<h3><a href="#">Feugiat lorem ipsum</a></h3>
												</header>
												<span class="timestamp">hace 2 days</span>
											</article>
										</li>
									</ul>
								</section>

							<!-- Testimonys -->
							<?php require_once VIEWS_PATH . '/testimonys.php'; ?>


						</div>
						<hr />
						<div class="row">
							<div class="col-12">

								<!-- Contact -->
									<section id="about" class="contact">
										<header>
											<h3>Contáctanos, estaremos felices de atenderte.</h3>
										</header>
										<p>
											Tu bienestar es nuestra prioridad, no dudes en escribirnos o visitarnos por alguno de nuestros canales de atención.<br>
											¡Te esperamos para brindarte el mejor servicio a través de nuestros profesionales!
										</p>										
										<ul class="icons">
											<li><a href="/" class="icon brands fa-dribbble"><span class="label">Web site</span></a></li>
											<li><a href="https://wa.me/573192031330?text=Hola%20maestro,%20busco%20un%20servicio" target="_blank" class="icon brands fa-whatsapp"><span class="label">Whatsapp</span></a></li>
										</ul>
									</section>

								<!-- Copyright -->
								<div class="copyright">
									<ul class="menu">
										<li>&copy; <a href="/">maestrosdelamor.local</a>. All rights reserved.</li><li>Design: <a href="/">maestrosdelamor.local</a></li>
									</ul>
								</div>

							</div>

						</div>
					</div>
				</div>

		</div>

		<?php require_once LAYOUTS_PATH . '/scripts.php'; ?>

	</body>
</html>