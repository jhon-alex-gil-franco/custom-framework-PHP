<?php

    class Home extends Controllers{

        public function __construct(){
            parent::__construct();
        }

        public function home($params){
            $data['tag_page']= "Home";
            $data['page_title']= "Pagina principal";
            $data['page_name']="home";
            $data['page_id']=1;
            $data['page_content']="loremjskdjsdjaoifhoiehfhfifhfhfhfhfd";
            $this->views->getView($this,"home",$data);
        }

        public function insertar(){
            $data =$this->model->setUser("manfredo", 32);
            print_r($data);
        }

        public function consultar(int $id){
            $data=$this->model->getUser($id);
            print_r($data);
        }

        public function consultarTodo(){
            $data=$this->model->getUserAll();
            print_r($data);
        }

        public function eliminar(int $id){
            $data=$this->model->delete($id);
            print_r($data);
        }

        public function actualizar(){
            $data=$this->model->update(7, "pablo", 5 );
            print_r($data);
        }
    }

?>