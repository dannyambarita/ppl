<?php

class Productadd extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('product_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('price', 'Price', 'required|trim');
        $this->form_validation->set_rules('description', 'Description', 'required|trim');
        $data['title'] = 'Add Product';
        $data['roti_role'] = $this->product_model->getroti();
        $data['special_role'] = $this->product_model->getspecial();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header2', $data);
            $this->load->view('productadd/index', $data);
        } else {
            $this->product_model->tambahDataRoti();
        }
    }
}
