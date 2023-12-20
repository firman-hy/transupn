<?php

class Menu_model extends CI_Model {
    public function getAllMenu() {
        $query = $this->db->get('menu');
        return $query->result_array();
    }
}