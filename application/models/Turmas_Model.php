<?php
class Turmas_Model extends CI_Model{

    public function getAll() {
        return $this->db->get_where("turmas",array("status" => 1))->result_array();
    }

    public function salva($turma) {
        $this->db->insert("turmas", $turma);
    }

}