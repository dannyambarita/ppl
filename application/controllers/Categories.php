<?php

class Categories extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('roti_model');
    }

    public function index()
    {
        $data['title'] = 'Categories';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['roti_role'] = $this->roti_model->data_roti_role();
        if ($this->session->userdata('email') === null) {
            $this->load->view('templates/header', $data);
            $this->load->view('categories/index', $data);
        } else {
            $this->load->view('templates/header2', $data);
            $this->load->view('categories/index', $data);
        }
    }
    public function hapus($id)
    {
        $this->roti_model->hapus_data_role($id);
        $this->session->set_flashdata('flash', 'Deleted');
        redirect('categories');
    }
}
