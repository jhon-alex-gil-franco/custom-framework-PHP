<?php
  
   class homeModel extends Mysql{

        public function __construct(){  
           parent::__construct();  
        }
        
        public function setUser(string $nombre, int $edad){
           $query_insert ="INSERT INTO usuario(nombre, edad)Values(?,?)";
           $arrData= array($nombre, $edad);
           $request_insert =$this->insert($query_insert,$arrData);
           return $request_insert;
        }

        public function getUser(int $id){
         $query ="SELECT * FROM usuario where id =$id";
         $request_insert =$this->select( $query);
         return $request_insert;
        }

        public function getUserAll(){
         $query ="SELECT * FROM usuario";
         $request_insert =$this->selectAll( $query);
         return $request_insert;
        }

        public function delete(int $id){
         $query ="DELETE FROM usuario WHERE id =$id";
         $request_insert =$this->drop( $query);
         return $request_insert;
        }

        public function update(int $id, string $nombre, int $edad){
         $query ="UPDATE usuario SET nombre= ?, edad=?  WHERE id =$id";
         $arrData= array($nombre, $edad);
         $request =$this->upd( $query,$arrData);
         return $request;
        }

   }

?>