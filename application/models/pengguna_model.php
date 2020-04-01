<?php

class pengguna_model extends CI_model {
    public function tambahDataPengguna() 
    {
       $data = [
           "nama_pengguna" => $this->input->post('nama', true),
           "umur_pengguna" => $this->input->post('umur', true),
           "username_pengguna" => $this->input->post('username', true),
           "password_pengguna" => $this->input->post('pass', true),
           "jenis_kelamin_pengguna" => $this->input->post('jeniskelamin', true),
           "email" => $this->input->post('email', true)           
       ];
       $this->db->insert('pengguna', $data);
    }
}