<?php

class Testimoni_admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('komentar_model');
    }

    public function index()
    {
        $data['title'] = 'Testimoni';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['komentar'] = $this->komentar_model->data_komentar();
        if ($this->session->userdata('email') === null) {
            $this->load->view('templates/header', $data);
            $this->load->view('testimoni_admin/index', $data);
        } else {
            $this->load->view('templates/header2', $data);
            $this->load->view('testimoni_admin/index', $data);
        }
    }
}
