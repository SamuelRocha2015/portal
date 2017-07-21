<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Turmas_Model extends CI_Model{

    var $table = "turmas";

    public function getAll() {
        return $this->db->get_where($this->table,array("status" => 1))->result_array();
    }

    public function salva($turma) {
        $this->db->insert($this->table, $turma);
    }

    function getById($idTurma){
        return $this->db->get_where($this->table,array("id" => $idTurma))->row_array();
    }
}