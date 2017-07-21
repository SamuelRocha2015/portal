<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cursos_Model extends CI_Model{

    var $table = "cursos";

    function __construct() {
        parent::__construct();
    }


    public function getAll() {
        return $this->db->get_where($this->table,array("status" => 1))->result_array();
    }

    public function salva($curso) {
        $this->db->insert($this->table, $curso);
    }

    function getById($idCurso){
        return $this->db->get_where($this->table,array("id" => $idCurso))->row_array();
    }

}