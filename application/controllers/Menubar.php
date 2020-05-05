<?php

class Menubar extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('login_model');
        $this->load->model('about_us_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['title'] = 'Admin Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['about'] = $this->about_us_model->about_us();

        $this->form_validation->set_rules('deskripsi', 'Description', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header2', $data);
            $this->load->view('menubar/index', $data);
        } else {
            $description = $this->input->post('description');

            $this->db->set('deskripsi', $description);
        }
    }
}
