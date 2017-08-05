<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Turmas extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("cursos_model");
    }

    public function index(){
        $turmas = $this->turmas_model->getAll();
        $this->load->helper("utils");
        $this->load->view("turmas/list.php",array("turmas" => $turmas));
    }

    public function form(){
        $cursos = $this->cursos_model->getAll();
        return $this->load->view("turmas/form.php",array("cursos" => $cursos));
    }

    public function edit($idTurma){
        $this->load->model("turmas_model");
        $dados['turma'] = $this->turmas_model->getById($idTurma);
        return $this->load->view("turmas/form.php", $dados);
    }

}