<?php
    class Conexion{

        private $HOST = "127.0.0.1";
        private $DB = "bellakodb";
        private $USER = "root";
        private $PWD = "";

        function __construct(){}
        function crearConexion(){
            $mysqli = new mysqli($this->HOST,$this->USER,$this->PWD,$this->DB);
            if($mysqli->connect_errno){
                return 0;
            }
            return $mysqli;
        }
    }
?>