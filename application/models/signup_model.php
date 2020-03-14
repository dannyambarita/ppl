<?php

class signup_model extends CI_model {
    public function getAllsign() 
    {
        return $this->db->get('sign')->result_array();     
    }
}