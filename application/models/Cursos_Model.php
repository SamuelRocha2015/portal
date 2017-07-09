<?php
class Cursos_Model extends CI_Model{

    public function getAll() {
        return $this->db->get_where("cursos",array("status" => 1))->result_array();
    }

    public function salva($curso) {
        $this->db->insert("cursos", $curso);
    }

}