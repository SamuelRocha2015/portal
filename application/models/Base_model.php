<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base_model extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function getAll($table) {
        return $this->db->get_where($table,array("status" => 1))->result_array();
    }

    public function salva($table, $obj) {
        $this->db->insert($table, $obj);
    }

    function getById($table, $id){
        return $this->db->get_where($table,array("id" => $id))->row_array();
    }

}