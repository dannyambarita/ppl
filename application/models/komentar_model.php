<?php

class komentar_model extends CI_model
{
    public function data_komentar()
    {
        return $this->db->get('komentar')->result_array();
    }

    public function data_user()
    {
        return $this->db->get('user')->result_array();
    }

    public function tambahDataKomentar()
    {
        $data = [
            "isi_komentar" => $this->input->post('testimoni', true)
            //"id_user"      => $this->input->post('id', true)
        ];
        $this->db->insert('komentar', $data);
        redirect('testimoni_user');
    }

    function hapus_komentar($id)
    {
        $this->db->where('id_komentar', $id);
        $this->db->delete('komentar');
    }
}
