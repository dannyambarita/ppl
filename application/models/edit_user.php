<?php

class edit_user extends CI_model
{
    public function edit_admin()
    {
        return $this->db->get('user')->result_array();
    }
}
