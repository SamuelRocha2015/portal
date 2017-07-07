<?php

class Cursos extends CI_Controller{

    public function index(){
        $this->load->model("cursos_model");
        $cursos = $this->cursos_model->getAll();
        $this->load->view("cursos/index.php",array("cursos" => $cursos));
    }
}