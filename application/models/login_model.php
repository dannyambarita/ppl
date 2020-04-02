<?php

class login_model extends CI_model {
    public function masukDataPengguna() 
    {
       $data = [
            "email" => $this->input->post('email', true),
            "username_pengguna" => $this->input->post('username', true),
            "password_pengguna" => $this->input->post('pass', true)
           ];
       $this->db->select('pengguna', $data);
       
    }
}?>