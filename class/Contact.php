<?php

include './includes/connection.php';

class Contacto
{

    private $fecha;
    private $nombre;
    private $telefono;
    private $consulta;

    function Contacto($fecha, $nombre, $telefono, $consulta)
    {
        $this->fecha = $fecha;
        $this->nombre = $nombre;
        $this->telefono = $telefono;
        $this->consulta = $consulta;
    }

    function Enviar()
    {
        $db = new Conexion();
        if ($db->connect_errno) {
            echo '<script type="text/javascript"> alert("Acces denied for Data Base"); </script>';
        } else {
            $consulta = "INSERT INTO Contacto VALUES (0,'$this->fecha','$this->nombre','$this->telefono','$this->consulta') ";
            if ($db->query($consulta)) {
                echo '<script type = "text/javascript"> alert("Contacto exitoso, en breve nos comunicaremos contigo.");</script>';
                echo "<script> self.location= './contacto.php' </script>";
            } else {
                echo '<script type="text/javascript"> alert("Error al enviar:\n' . $db->error . ' "); </script>';
            }
            $db->close();
        }
    }
}
