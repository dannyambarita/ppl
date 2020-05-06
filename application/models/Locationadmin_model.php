<?php

class Locationadmin_model extends CI_model
{

    public function getNamaGambar($id){
      $query = $this->db->query("SELECT toko FROM location where id =" . $id . ";");

      return $query->row()->toko;
    }

    public function getData(){
      return $this->db->get('location')->result_array();
    }

    public function hapusData($id){
      $this->db->query("DELETE FROM location WHERE id =" . $id . ";");
    }

    public function locationadd($namafoto, $data){
      $this->db->set('toko', $namafoto);
      $this->db->insert('location', $data);
    }
}
 ?>
