<?php

class product_model extends CI_model
{
    public function tambahDataRoti()
    {
        $data = [
            "nama_roti" => $this->input->post('name', true),
            "harga_roti" => $this->input->post('price', true),
            "jenis_roti" => $this->input->post('category', true),
            "deskripsi_roti" => $this->input->post('description', true)//,
            //"special" => $this->input->post('special', true)
        ];
        $upload_image = $_FILES['photo']['name'];
        if ($upload_image) {
            $config = array(
                'upload_path'          => './assets/img/roti',
                'allowed_types'        => 'gif|jpg|png',
                'overwrite'            => true,
                'max_size'             => 1024
            );
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('photo')) {
                $image = $this->upload->data('file_name');
                $this->db->set('gambar_roti', $image);
            } else {
                echo $this->upload->display_errors();
            }
        }
        $this->db->insert('roti', $data);
        redirect('product');
    }

    function getroti()
    {
        return $this->db->query('SELECT jenis_roti FROM roti_role')->result();
    }

    function getspecial()
    {
        return $this->db->query('SELECT nama_special FROM special_role')->result();
    }

    public function tambahJenisRoti()
    {
        $data = [
            "jenis_roti" => $this->input->post('name', true)
        ];

        $this->db->insert('roti_role', $data);
        redirect('categories');
    }
}
