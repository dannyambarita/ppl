<?php

class Discount_model extends CI_model
{
    public function data_diskon()
    {
        return $this->db->get('diskon')->result_array();
    }
}
 ?>
