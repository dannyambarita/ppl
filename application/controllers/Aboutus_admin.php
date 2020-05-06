<?php

class Aboutus_admin extends CI_Controller
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
        $data['about'] = $this->db->get_where('about', array('id' => 1))->row_array();

        $this->form_validation->set_rules('description', 'Description', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header2', $data);
            $this->load->view('aboutus_admin/index', $data);
        } else {
            $description = $this->input->post('description');
            $this->db->set('deskripsi', $description);
            redirect('aboutus_admin');
        }
    }
}
