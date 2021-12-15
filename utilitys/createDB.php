<?php

include("conexion.php");
$DB = new Conexion();

$validar = $DB->query("
CREATE TABLE Contacto(
			Id bigint AUTO_INCREMENT,
            Fecha date NOT NULL,
			Nombre tinytext NOT NULL,
			Telefono bigint NOT NULL,
			Consulta text NOT NULL,
			PRIMARY KEY (Id));
");

if (!$validar) {
	echo "<br>Error en la ejecucion de la sentencia";
} else {
	echo "<br>Ejecucion exitosa de la sentencia";
}
$DB->close();
