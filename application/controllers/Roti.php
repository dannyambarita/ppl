<?php

class Roti extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('roti_model');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['roti'] = $this->roti_model->data_roti();
        if ($this->session->userdata('email') === null) {
            $this->load->view('templates/header', $data);
            $this->load->view('roti/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->load->view('templates/header2', $data);
            $this->load->view('roti/index', $data);
            $this->load->view('templates/footer');
        }
    }
}
