<?php
$Title = "Contactanos";
$Page = "contact";
include 'utilitys/header.php';
?>

<body>
    <div id="page-wrapper">
        <div id="header">
            <div class="inner">
                <header>
                    <h1><a>Consulta hoy con nuestros maestros</a></h1>
                </header>
                <p>
                    Para poder ayudarte diligencia el formulario con la información de tu caso, así como tus datos personales para poder enviarte
                    la respuesta, o si lo prefieres envianos un WhatsApp, con gusto te atenderemos.
                </p>
                <form id="signup-form" method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
                    <div class="row">
                        <div class="col-6 col-12-mobile"><input type="text" name="name" placeholder="* Nombre Completo" minlength="10" maxlength="50" required value="<?php if (isset($_POST['name'])) {
                                                                                                                                                                            echo $_POST['name'];
                                                                                                                                                                        } ?>" /></div>
                        <div class="col-6 col-12-mobile"><input type="number" name="phone" placeholder="* Codigo pais y Numero de contacto" minlength="8" maxlength="20" required value="<?php if (isset($_POST['phone'])) {
                                                                                                                                                                                                echo $_POST['phone'];
                                                                                                                                                                                            } ?>" /></div>
                        <div class="col-12 col-12-mobile"><textarea name="question" placeholder="* Descripcion de su consulta" minlength="20" maxlength="255" required></textarea></div>
                        <div class="col-12 col-12-mobile">
                            <button type="submit" name="send" style="width: 100%;"><span class="icon solid fa-paper-plane"></span> Enviar Consulta</button>
                        </div>
                    </div>
                </form>
                <?php
                if (isset($_REQUEST['send'])) {
                    if (isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['question'])) {
                        include './class/Ccontact.php';
                        $Contacto = new Contacto(date("Y-m-d"), $_POST['name'], $_POST['phone'], $_POST['question']);
                        $Contacto->Enviar();
                    }
                }
                ?>
            </div>
            <?php include 'utilitys/nav.php'; ?>
        </div>
        <?php include 'footer.php'; ?>
    </div>
</body>
<?php include 'utilitys/scripts.php'; ?>

</html>