<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alunos_model  extends CI_Model {

    var $table = "alunos";

    function __construct() {
        parent::__construct();
    }

    public function getAll() {
        $this->db->from($this->table);
        $this->db->order_by("status desc");
        $query = $this->db->get();
        return $query->result();
    }

}