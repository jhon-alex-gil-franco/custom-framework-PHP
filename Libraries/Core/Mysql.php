<?php

    class Mysql extends Conexion{
        private $conexion;
        private $strquery;
        private $arrValues;

        function __construct(){
            $this->conexion =new Conexion();
            $this->conexion =$this->conexion->conect();
        }


        public function insert(string $query, array $values){
            $this->strquery=$query;
            $this->arrValues =$values;
            $insert = $this->conexion->prepare($this->strquery);
            $resInsert = $insert->execute($this->arrValues);
            if($resInsert){
               $lastInsert =$this->conexion->lastInsertId();
            }else{
                $lastInsert= 0;
            }
            return $lastInsert;
        }

        public function select(string $query){
            $this->strquery=$query;
            $result = $this-> conexion->prepare($this->strquery);
            $result->execute();
            $data =$result->fetch(PDO::FETCH_ASSOC);
            return $data;
        }

        public function selectAll(string $query){
            $this->strquery=$query;
            $result = $this-> conexion->prepare($this->strquery);
            $result->execute();
            $data =$result->fetchall(PDO::FETCH_ASSOC);
            return $data;
        }

    
        public function drop(string $query){
            $this->strquery=$query;
            $del = $this->conexion->prepare($this->strquery);
            $resUpdate = $del->execute();
            return $resUpdate;
        }

        public function upd(string $query, array $arrData){
            $this->strquery=$query;
            $this->arrValues=$arrData;
            $updData = $this->conexion->prepare($this->strquery);
            $resUpdate = $updData->execute($this->arrValues);
            return $resUpdate;
        }



    }


?>