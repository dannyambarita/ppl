<?php

class Product extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('roti_model');
    }

    public function index()
    {
        $data['title'] = 'Admin Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['roti'] = $this->roti_model->data_roti();
        if ($this->session->userdata('email') === null) {
            $this->load->view('templates/header', $data);
            $this->load->view('product/index', $data);
        } else {
            $this->load->view('templates/header2', $data);
            $this->load->view('product/index', $data);
        }
    }

    function hapus()
    {
        $id_roti = $this->input->post('id_roti');
        $this->product_model->hapus_data($id_roti);
        redirect('product');
    }
}
