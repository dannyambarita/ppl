<?php

class roti_model extends CI_model {
    public function getAllroti() 
    {
        return $this->db->get('roti')->result_array();     
    }
}