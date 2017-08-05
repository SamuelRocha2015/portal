<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Alunos extends CI_Controller {


    public function __construct() {
        parent::__construct();
        $this->load->model("base_model");
    }

    public function index(){
        $alunos = $this->base_model->getAll();
        $this->load->view("alunos/list.php",array("alunos" => $alunos));
    }


}
