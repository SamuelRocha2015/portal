<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Turmas extends CI_Controller {

    public function index(){
        $this->load->model("turmas_model");
        $turmas = $this->turmas_model->getAll();
        $this->load->helper("utils");
        $this->load->view("turma-list.php",array("turmas" => $turmas));
    }

    public function form(){
        $this->load->model("cursos_model");
        $cursos = $this->cursos_model->getAll();
        return $this->load->view("turma-form.php",array("cursos" => $cursos));
    }

}