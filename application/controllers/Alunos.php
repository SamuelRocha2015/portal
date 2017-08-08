<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Alunos extends CI_Controller {


    public function __construct() {
        parent::__construct();
        $this->load->model("alunos_model");
        $this->load->model("base_model");
    }

    public function index(){
        $alunos = $this->alunos_model->getAll();
        $this->load->view("alunos/list.php",array("alunos" => $alunos));
    }

    public function form(){
        $data['universidades'] = $this->base_model->getAll("categoria");
        return $this->load->view("alunos/form.php", $data);
    }


}
