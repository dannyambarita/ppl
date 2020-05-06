<?php

class Faq_model extends CI_model
{

    public function getData(){
      return $this->db->get('faq')->result_array();
    }

    public function hapusData($id){
      $this->db->query("DELETE FROM faq WHERE id =" . $id . ";");
    }

    public function faqadd($data){
      $this->db->insert('faq', $data);
    }
}
 ?>
