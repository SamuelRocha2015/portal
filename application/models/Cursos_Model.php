<?php
class Cursos_Model extends CI_Model{

    public function getAll() {
        return $this->db->get("cursos")->result_array();
    }

}