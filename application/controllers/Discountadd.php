<?php

class Discountadd extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('discountadmin_model');
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->helper('form');
    }

    public function index()
    {
        $upload_image = $_FILES['userfile']['name'];
        if ($upload_image) {
            $config = array(
                'upload_path'          => base_url('assets/img/roti/'),
                'allowed_types'        => 'gif|jpg|png',
                'overwrite'            => true,
                'max_size'             => 1024
            );
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('userfile')) {
                $image = $this->upload->data('file_name');
                $this->db->set('foto', $image);
            } else {
                echo $this->upload->display_errors();
            }
        }
        $data = [
            "deskripsi" => $this->input->post('deskripsi', true),
          ];

        $this->db->insert('diskon', $data);
        redirect('discount_admin');

    }
}
