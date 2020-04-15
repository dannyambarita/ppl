<?php

class product_model extends CI_model
{
    public function tambahDataRoti()
    {
        $data = [
            "name_roti" => $this->input->post('name', true),
            "harga_roti" => $this->input->post('price', true),
            "jenis_roti" => $this->input->post('category', true),
            "gambar_roti" => $this->uploadImage(),
            "deskripsi_roti" => $this->input->post('description', true),
        ];
        $this->db->insert('roti', $data);
        redirect('product');
    }

    function getroti()
    {
        return $this->db->query('SELECT jenis_roti FROM roti_role')->result();
    }

    public function uploadImage()
    {
        $config = array(
            'upload_path'          => './assets/img/roti',
            'allowed_types'        => 'gif|jpg|png',
            'overwrite'            => true,
            'max_size'             => 1024 // 1MB
            //$config['max_width']            = 1024;
            //$config['max_height']           = 768;
        );
        $this->load->library('upload', $config);
        if ($this->upload->uploadImage()) {
            redirect('product');
        } else {
            redirect('productadd');
        }
    }

    function hapus_data($id_roti)
    {
        $hasil = $this->db->query("'DELETE FROM roti WHERE id_roti = '$id_roti'");
        return $hasil;
    }
}
