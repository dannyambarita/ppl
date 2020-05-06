<?php

class Categoriesadd extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('roti_model');
        $this->load->model('product_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $data['title'] = 'Add Product';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header2', $data);
            $this->load->view('categoriesadd/index', $data);
        } else {
            $this->product_model->tambahJenisRoti();
        }
    }
}
