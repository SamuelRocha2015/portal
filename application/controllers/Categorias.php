<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Categorias extends CI_Controller {

    var $table = "categoria";

    public function __construct() {
        parent::__construct();
        $this->load->model("base_model");
    }

    public function index(){
        $categorias = $this->base_model->getAll($this->table);
        $this->load->view("categorias/list.php",array("categorias" => $categorias));
    }


    public function form(){
        return $this->load->view("categorias/form.php");
    }
}