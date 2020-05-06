<?php

class Discountadmin_model extends CI_model
{

    public function getNamaGambar($id){
      $query = $this->db->query("SELECT foto FROM diskon where id =" . $id . ";");

      return $query->row()->foto;
    }

    public function hapusGambar($id){
      $this->db->query("DELETE FROM diskon WHERE id =" . $id . ";");
    }

    public function discountadd($namafoto, $data){
      $this->db->set('foto', $namafoto);

      $this->db->insert('diskon', $data);
    }
}
 ?>
