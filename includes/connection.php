<?php

class Conexion extends MySQLi {

    function __construct() {
        //parent::__construct("localhost", "id12523519_maestrosdelamor", "m@estrosdel@mor*2020", "id12523519_maestrosdelamor");
        parent::__construct("localhost", "root", "", "maestrosdelamor");
        $this->query("Set Names 'utf8';");
        $this->connect_errno ? 'Error' : 'Conectado';
    }

}
