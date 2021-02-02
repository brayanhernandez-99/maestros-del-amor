<?php
$Title = "Maestros del amor";
$Page = "index";
include 'includes/header.php';
?>

<body class="homepage is-preload">
    <div id="page-wrapper">
        <div id="header">
            <div class="inner">
                <header>
                    <h1><a href="" id="logo">Maestros del amor</a></h1>
                    <hr />
                    <p>Consulta con nosotros aquí.</p>
                </header>
                <?php include './includes/logoWhatsApp.php'; ?>
            </div>
            <?php include './includes/nav.php'; ?>
        </div>
        <section id="banner">
            <header>
                <h2><strong><a>Garantizamos todos nuestros trabajos</a></strong></h2>
                <p>
                    Si usted por más que intenta no logra el éxito en su vida, si vive solo, amargado y con desamor, si tiene problemas 
                    de salud inexplicables, si la pobreza y la mala suerte lo persiguen es momento de visitar a los maestros del amor y 
                    si no queda satisfecho(a) con el trabajo realizado le devolveremos el 100% de su dinero incluyendo el valor de los 
                    materiales que se haya utilizado.
                </p>
            </header>
        </section>

        <?php
        include './services.php';
        include './testimonies.php';
        include './footer.php';
        ?>

    </div>
    <?php include './includes/scripts.php'; ?>
</body>
</html>