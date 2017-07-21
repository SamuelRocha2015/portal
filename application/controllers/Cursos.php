<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cursos extends CI_Controller{

    public function index(){
        $this->load->model("cursos_model");
        $cursos = $this->cursos_model->getAll();
        $this->load->view("cursos/list.php",array("cursos" => $cursos));
    }

    public function form(){
        return $this->load->view("cursos/form.php");
    }

    public function novo() {
        $curso = array(
            "nome"=>$this->input->post("nome"),
            "codigo"=>$this->input->post("codigo"),
            "detalhe"=>$this->input->post("detalhes"),
            "horas"=>$this->input->post("horas"),
            "preco"=>$this->input->post("preco")
        );

        $this->load->model("cursos_model");
        $this->cursos_model->salva($curso);
        redirect("cursos");
    }


    public function edit($idCurso){
        $this->load->model("cursos_model");
        $dados['curso'] = $this->cursos_model->getById($idCurso);
        return $this->load->view("cursos/form.php", $dados);
    }
}