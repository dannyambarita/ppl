<?php

class Faqtampil_model extends CI_model
{
    public function data_faq()
    {
        return $this->db->get('faq')->result_array();
    }
}
 ?>
