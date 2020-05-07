<?php

class about_us_model extends CI_model
{
    public function about_us()
    {
        return $this->db->get('about')->result_array();
    }

    public function update($deskripsi, $namafoto){
      $this->db->query("UPDATE about SET image='" . $namafoto . "', deskripsi='". $deskripsi ."' WHERE id =1;");
    }
}
