<?php

class Location_model extends CI_model
{
    public function getData(){
      return $this->db->get('location')->result_array();
    }
}
 ?>
