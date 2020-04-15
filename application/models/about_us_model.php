<?php

class about_us_model extends CI_model
{
    public function about_us()
    {
        return $this->db->get('about')->result_array();
    }
}
