<?php

class roti_model extends CI_model
{
    public function data_roti()
    {
        return $this->db->get('roti')->result_array();
    }
}
