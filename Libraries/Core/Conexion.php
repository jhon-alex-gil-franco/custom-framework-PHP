<?php

    class Conexion{

        private $conect;

        public function __construct(){
            $connectionString = "mysql:host=".DB_HOST. ";dbname=".DB_NAME. ";charset=".DB_CHARSET ;
            try{
                $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                            PDO::ATTR_EMULATE_PREPARES => false];
                $this->conect=new PDO($connectionString, DB_USER, DB_PASSWORD, $options);
                 
            }catch(Exeption $e){
                $this->conect='Error de conexion';
                echo "ERROR:".$e->getMessage();
            }
        }

        public function conect(){
            return $this->conect;
        }

    }

?>