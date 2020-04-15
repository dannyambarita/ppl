<?php

class komentar_model extends CI_model
{
    public function data_komentar()
    {
        return $this->db->get('komentar')->result_array();
    }

    public function tambahDataKomentar()
    {
        $data = [
            "komentar" => $this->input->post('testimoni', true)
        ];
        $this->db->insert('komentar', $data);
        redirect('testimoni_user');
    }
}
